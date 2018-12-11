<template>
    <div>
        <button rel="prev" dusk="previous" class="btn btn-link py-3 px-4 text-80 opacity-50" @click="previous">
            Previous
        </button>
    </div>
</template>

<script>
export default {
    methods: {
        previous () {
            this.$router.push({
                name: 'settings'
            })
        }
    }
}
</script>
