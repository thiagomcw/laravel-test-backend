<script>
import Properties from "../../api/endpoints/Properties";

export default {
    name: "PropertiesIndex",

    data() {
        return {
            properties: [],
            order_by: null,
        };
    },

    created() {
        this.loadProperties();
    },

    methods: {
        loadProperties(order_by) {
            Properties
                .index({order_by})
                .then(response => this.properties = response.data);
        },

        order(field) {
            if (field === this.order_by)
                return false;

            this.order_by = field;
            this.loadProperties(field);
        }
    }
}
</script>

<style scoped>

</style>