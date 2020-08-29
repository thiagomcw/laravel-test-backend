<script>
export default {
    name: "ContractsForm",

    props: {
        oldContractorType: String
    },

    data() {
        return {
            contractorType: null,
        };
    },

    computed: {
        isPersonContractor() {
            return this.contractorType === 'person';
        },

        documentLabel() {
            return this.isPersonContractor ? 'CPF' : 'CNPJ';
        },

        documentMask() {
            return this.isPersonContractor ? '###.###.###-##' : '##.###.###/####-##';
        },
    },

    created() {
        this.setContractorType();
    },

    methods: {
        setContractorType() {
            if (this.oldContractorType)
                this.contractorType = this.oldContractorType;
        }
    }
}
</script>

<style scoped>

</style>