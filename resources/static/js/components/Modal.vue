<template>
    <div v-if="show" @click.self="close" class="layer">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <div class="box">
                <div class="header">
                    <h3 class="text-2xl font-semibold">{{ title }}</h3>
                    <button @click="close" class="close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="relative p-6 flex-auto">
                    <p class="my-4 text-gray-600 text-lg leading-relaxed">
                        {{ text }}
                    </p>
                </div>
                <div class="footer">
                    <button type="button" style="transition: all .15s ease" @click="confirm"
                            class="text-green-500 bg-transparent border-green-500 hover:bg-green-500 hover:text-white">
                        {{ confirmButtonText }}
                    </button>
                    <button type="button" style="transition: all .15s ease" @click="cancel" v-if="cancelButton"
                            class="text-gray-500 bg-transparent border-gray-500 hover:bg-gray-500 hover:text-white">
                        {{ cancelButtonText }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",

    props: {
        title: String,
        text: String,
        show: {
            type: Boolean,
            default: false
        },
        confirmButtonText: {
            type: String,
            default: 'Ok'
        },
        cancelButton: {
            type: Boolean,
            default: false
        },
        cancelButtonText: {
            type: String,
            default: 'Cancelar'
        },
    },

    methods: {
        close() {
            this.$emit('close');
        },

        confirm() {
            this.$emit('confirm');
        },

        cancel() {
            this.$emit('cancel');
        },
    }
}
</script>

<style lang="scss" scoped>
.layer {
    @apply .overflow-x-hidden .overflow-y-auto .fixed .inset-0 .outline-none .justify-center .items-center .flex .bg-smoke-light;

    .box {
        @apply .border-0 .rounded-lg .shadow-lg .relative .flex .flex-col .w-full .bg-white .outline-none;

        .header {
            @apply .flex .items-start .justify-between .p-5 .border-b .border-solid .border-gray-300 .rounded-t;

            button.close {
                @apply .p-1 .ml-auto .bg-transparent .border-0 .float-right .text-xl .leading-none .font-semibold .outline-none;
            }
        }

        .footer {
            @apply .flex .items-center .justify-end .p-6 .border-t .border-solid .border-gray-300 .rounded-b;

            button {
                @apply .border .border-solid .font-bold .uppercase .text-sm .px-4 .py-2 .rounded .outline-none .mx-1;
            }
        }
    }
}

:focus {
    @apply .outline-none;
}
</style>