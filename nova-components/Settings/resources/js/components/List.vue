<template>
    <div class="relative">
        <heading class="mb-6">Settings</heading>
        <div class="flex justify-between">
            <div class="relative h-9 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70">
                    <path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                </svg>
                <input data-testid="search-input" dusk="search" placeholder="Search" type="search" class="appearance-none form-control form-input w-search pl-search" v-model="search">
            </div>
            <span class="ml-auto mb-6">
              <button class="btn btn-default btn-primary" dusk="create-button" @click="create">Create new</button>
          </span>
        </div>
        <div class="card relative">
            <div class="overflow-hidden overflow-x-auto relative">
                <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-left">
                              <span dusk="sort-id" class="cursor-pointer inline-flex items-center">ID</span>
                            </th>
                            <th class="text-center">
                                <span></span>
                            </th>
                            <th class="text-left">
                              <span dusk="sort-name" class="cursor-pointer inline-flex items-center">KEY</span>
                            </th>
                            <th class="text-left">
                              <span dusk="sort-email" class="cursor-pointer inline-flex items-center">VALUE</span>
                            </th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody v-for="(item, index) in filtered" :key="index">
                        <tr dusk="id-row">
                            <td>{{ item.id }}</td>
                            <td></td>
                            <td>
                                <span class="whitespace-no-wrap text-left" via-resource="" via-resource-id="">{{ item.key }}</span>
                            </td>
                            <td>
                                <span class="whitespace-no-wrap text-left" via-resource="" via-resource-id="">{{ item.value | truncate(30, '...') }}</span>
                            </td>
                            <td class="td-fit text-right pr-6">
                                <span>
                                    <a @click="edit(item)" class="cursor-pointer text-70 hover:text-primary mr-3" dusk="2-edit-button" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="edit" role="presentation" class="fill-current">
                                            <path d="M4.3 10.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM6 14h2.59l9-9L15 2.41l-9 9V14zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h6a1 1 0 1 1 0 2H2v14h14v-6z"></path>
                                        </svg>
                                    </a>
                                </span>
                                <button data-testid="users-items-0-delete-button" dusk="2-delete-button" title="Delete" class="appearance-none cursor-pointer text-70 hover:text-primary mr-3" @click="remove(item, index)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="delete" role="presentation" class="fill-current">
                                        <path fill-rule="nonzero" d="M6 4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6H1a1 1 0 1 1 0-2h5zM4 6v12h12V6H4zm8-2V2H8v2h4zM8 8a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        search: '',
        list: []
    }),
    filters: {
        truncate (text, stop, clamp) {
            return text.slice(0, stop) + (stop < text.length ? clamp || '...' : '')
        }
    },
    computed: {
        filtered: function() {
            if (this.search === '') {
                return this.list;
            }

            return this.list.filter( item => this.isInKey(item, 'key') || this.isInKey(item, 'value'))
        }
    },
    methods: {
        isInKey (item, field) {
            return item[field].toLowerCase().search(this.search.toLowerCase()) !== -1
        },
        create () {
            this.$router.push({
                name: 'settings-create'
            })
        },
        edit (item) {
            this.$router.push({
                name: 'settings-edit',
                params: {
                    id: item.id,
                    item: item
                }})
        },
        remove (item, index) {
            axios.delete('/nova-vendor/settings/'+ item.id)
                .then(() => {
                    this.$delete(this.list, index);
                    this.$toasted.show("The setting has been delete successfully", {
                        position: 'top-right',
                        type: 'success',
                        duration: 2000
                    })
                }).catch(error => {
                    this.$toasted.show(error, {
                        position: 'top-right',
                        type: 'error',
                        duration: 3000
                    });
            })
        }
    },
    mounted () {
        axios.get('/nova-vendor/settings/all')
            .then(response => {
                this.list = response.data
            }).catch(error => this.$toasted.show(error, { type: 'error' }))
    }
}
</script>
