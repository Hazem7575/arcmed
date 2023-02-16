import _ from 'lodash'
export const MyHelper = {
    methods: {
        asset_url(link) {
            return LinkUrl + link
        },
        __(str) {
            return _.get(window.i18n, str) || str
        }
    }
}
