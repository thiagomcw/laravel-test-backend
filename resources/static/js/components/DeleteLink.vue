<template>
    <div class="inline">
        <a href="#" class="text-md mx-1" @click.prevent="toggleModalOpened">
            <i class="fas fa-trash"></i>
        </a>

        <modal title="Atenção" text="Tem certeza que deseja deletar este registro?" confirm-button-text="Sim"
               :cancel-button="true" cancel-button-text="Não" :show="modalOpened" @close="toggleModalOpened"
               @cancel="toggleModalOpened" @confirm="submit"></modal>

        <form :action="url" method="post" class="inline" ref="formDelete">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" :value="token">
        </form>
    </div>
</template>

<script>
import Modal from './Modal';

export default {
    props: {
        url: {
            type: String,
            required: true
        },
        token: {
            type: String,
            required: true
        }
    },

    components: {
        Modal
    },

    data() {
        return {
            modalOpened: false
        };
    },

    methods: {
        toggleModalOpened() {
            this.modalOpened = !this.modalOpened;
        },

        submit() {
            this.$refs.formDelete.submit();
        }
    }
}
</script>
