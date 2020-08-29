<script>

import Contracts from "../../api/endpoints/Contracts";

export default {
    name: "ContractsIndex",

    data() {
        return {
            contracts: [],
        };
    },

    created() {
        this.loadContracts();
    },

    methods: {
        loadContracts() {
            Contracts
                .index({include_property: 1})
                .then(response => this.contracts = response.data);
        },

        deleteContract(id) {
            Contracts
                .destroy(id)
                .then(() => this.loadContracts(this.order_by));
        },
    }
}
</script>

<style scoped>

</style>