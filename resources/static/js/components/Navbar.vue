<script>
export default {
    data() {
        return {
            mobileOpened: false
        };
    },

    computed: {
        optionsClass() {
            return this.mobileOpened ? 'block' : 'hidden';
        }
    },

    methods: {
        mobileToggle() {
            this.mobileOpened = !this.mobileOpened
        }
    }
}
</script>
