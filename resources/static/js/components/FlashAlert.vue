<template>
    <div v-if="show" class="border px-4 py-3 rounded relative" :class="theme" role="alert">
        <span class="block sm:inline">{{ text }}</span>
        <a href="#" @click.prevent="show = false" class="absolute top-0 bottom-0 right-0 px-4 py-3 pointer">
            <i class="fas fa-times"></i>
        </a>
    </div>
</template>

<script>
export default {
    props: {
        text: {
            type: String,
            required: true
        },
        theme: {
            type: String,
            default: 'success'
        }
    },

    data() {
        return {
            show: true
        }
    }
}
</script>

<style lang="scss" scoped>
.success {
    @apply .bg-green-100 .border-green-400 .text-green-700;
}
</style>
