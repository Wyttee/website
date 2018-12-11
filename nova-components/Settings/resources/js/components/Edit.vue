<template>
    <div>
        <h1 class="mb-3 text-90 font-normal text-2xl">Edit</h1>
        <div class="card overflow-hidden">
            <form @submit.prevent="update">
                <div class="flex border-b border-40">
                    <div class="w-1/5 px-8 py-6">
                        <label class="inline-block text-80 h-9 pt-2">Name</label>
                        <p class="text-sm leading-normal text-80 italic"></p>
                    </div>
                    <div class="w-1/2 px-8 py-6">
                        <input id="name" dusk="name" placeholder="Name" type="text" class="w-full form-control form-input form-input-bordered" v-model="item.key">
                    </div>
                </div>
                <div class="flex border-b border-40">
                    <div class="w-1/5 px-8 py-6">
                        <label class="inline-block text-80 h-9 pt-2">Value</label>
                        <p class="text-sm leading-normal text-80 italic"></p>
                    </div>
                    <div class="w-1/2 px-8 py-6">
                        <input id="value" dusk="value" placeholder="value" type="text" class="w-full form-control form-input form-input-bordered" v-model="item.value">
                    </div>
                </div>
                <div class="bg-30 flex px-8 py-4">
                    <button dusk="update-button" class="ml-auto btn btn-default btn-primary mr-3">Update</button>
                </div>
            </form>
            <Previous></Previous>
        </div>
    </div>
</template>

<script>
import Previous from './Previous'

export default {
    props: ['id'],
    components: {
        Previous
    },
    data: () => ({
        item: {}
    }),
    methods:{
        update () {
            axios.patch('/nova-vendor/settings/' + this.id, {
                id : this.item.id,
                key : this.item.key,
                value : this.item.value
            }).then(() => {
                this.$toasted.show("The "+ this.item.key + " key has been updated successfully", {
                    position: 'top-right',
                    type: 'success',
                    duration: 2000
                });

                this.$router.push({
                    name: 'settings'
                })
            }).catch(error => {
                let errors = error.response.data.errors

                Object.keys(errors).forEach( field => {
                    this.$toasted.show(errors[field][0], {
                        position: 'top-right',
                        type: 'error',
                        duration: 3000
                    });
                })
            })
        }
    },
    mounted () {
        axios.get('/nova-vendor/settings/' + this.id)
            .then(response => this.item = response.data)
            .catch(error => console.log(error))
    }
}
</script>
