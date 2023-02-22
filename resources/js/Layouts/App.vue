<template>
    <Head :title="title"/>
    <Loading />
    <header-app />
        <slot/>
    <footer-app />
</template>

<script>
import Loading from "@/Components/Loading.vue";
import HeaderApp from "@/Layouts/HeaderApp.vue";
import FooterApp from "@/Layouts/FooterApp.vue";

import {Inertia} from "@inertiajs/inertia";
export default {
    name: "App",
    components: {FooterApp, HeaderApp, Loading},
    props : ['title'],

    mounted() {
        let $self = this
        Inertia.on('start', (event) => {
            $('.st-perloader').addClass('opacity-75').fadeIn(300)

        })
        Inertia.on('success', (event) => {
            $('.st-perloader').removeClass('opacity-75').fadeOut(300)
        })
        Inertia.on('invalid', (event) => {
            event.preventDefault()
            $('.st-perloader').removeClass('opacity-75').fadeOut(300)
        })
        Inertia.on('finish', (event) => {
            $('.st-perloader').removeClass('opacity-75').fadeOut(300)
        })
        Inertia.on('before', (event) => {
            $('.st-perloader').removeClass('opacity-75').fadeOut(300)
        })
        Inertia.on('exception', (event) => {
            event.preventDefault()
            $('.st-perloader').removeClass('opacity-75').fadeOut(300)
            //$self.show_error_view()
        })
        window.addEventListener('popstate', (event) => {
            event.stopImmediatePropagation();

            Inertia.reload({
                preserveState  : false,
                preserveScroll : false,
                replace        : true,
                onSuccess      : (page) => Inertia.setPage(page),
                onError        : () => window.location.href = event.state.url,
            });
        });
        $('#st-backtotop').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 1000);
        });
    }

}
</script>

<style scoped>

</style>
