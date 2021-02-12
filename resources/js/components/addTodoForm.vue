<template>
    <div class="container">
        <div class="tw-mb-4">
            <!-- <h1 class=" tw-text-gray-700">Todo List</h1> -->
            <div class="tw-flex tw-mt-4">
                <input v-model="todo.title" class="tw-outline-none tw-ring-1 tw-appearance-none tw-rounded-full tw-bg-blue-100 tw-border tw-border-green-300 hover:tw-border-green-500 focus:tw-border-green-500 tw-py-2 tw-px-5 tw-mr-4 tw-text-gay-800" placeholder="Add Todo"/>
                <button :class="[ todo.title ? 'active' : 'inactive', 'tw-outline-none']" class="tw-flex-no-shrink tw-p-2 tw-border-2 tw-rounded-full tw-bg-white" @click="storeTodo()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
            </div>
        </div>        
    </div>
</template>
<script>
import axios from 'axios'
import swal from 'sweetalert'

export default {
    data: function() {
        return {
            todo: {
                title: ""
            }
        }
    },
    methods: {
        storeTodo() {
            if (this.todo.title == '') {
                return swal('No input', 'You need to type something', 'info');
            }
            axios.post('api/todo/store', {
                todo: this.todo
            })
            .then (response => {
                if (response.status == 201) {
                    this.todo.title = "";
                    this.$emit('todochanged');
                    return swal({
                        title: 'Todo saved!',
                        icon: 'success',
                    });
                }
            })
            .catch (error => {
                console.log(error);
            })
        }
    },    
}
</script>
<style scoped>
    .active {
        color: #52eeb5;
        border-color: #30ba87;
    }
    .active :hover {
        color: #229e71;
    }
    .inactive {
        color: #999;
        border-color: #888;
    }
    .inactive :hover {
        color: #677777;
    }
</style>