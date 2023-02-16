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
export default {
    name: "App",
    components: {FooterApp, HeaderApp, Loading},
    props : ['title'],
    mounted() {
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
