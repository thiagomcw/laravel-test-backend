<template>
    <div class="inline">
        <a href="#" class="text-md mx-1" @click.prevent="toggleModalOpened">
            <i class="fas fa-trash"></i>
        </a>

        <modal title="Atenção" text="Tem certeza que deseja deletar este registro?" confirm-button-text="Sim"
               :cancel-button="true" cancel-button-text="Não" :show="modalOpened" @close="toggleModalOpened"
               @cancel="toggleModalOpened" @confirm="confirm"></modal>
    </div>
</template>

<script>
import Modal from './Modal';

export default {
    props: {
        id: {
            type: Number,
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

        confirm() {
            this.$emit('confirmed', this.id);
            this.toggleModalOpened();
        }
    }
}
</script>
