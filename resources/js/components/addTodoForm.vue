<template>
    <div class="container">
        <div class="tw-mb-4">
            <!-- <h1 class=" tw-text-gray-700">Todo List</h1> -->
            <div class="tw-flex tw-mt-4">
                <input v-model="todo.title" class="tw-ring-1 tw-appearance-none tw-border tw-border-green-300 hover:tw-border-green-500 focus:tw-border-green-500 tw-rounded tw-w-full tw-py-2 tw-px-3 tw-mr-4 tw-text-gray-800" placeholder="Add Todo">
                <button :class="[ todo.title ? 'active' : 'inactive']" class="tw-flex-no-shrink tw-p-2 tw-border-2 tw-rounded" @click="storeTodo()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
            </div>
        </div>        
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data: function() {
        return {
            todo: {
                title: ""
            }
        }
    },
    methods: {
        showInputField() {
            // change display of the input field
        },
        storeTodo() {
            if (this.todo.title == '') {
                return alert('You need to type something');
            }
            axios.post('api/todo/store', {
                todo: this.todo
            })
            .then (response => {
                if (response.status == 201) {
                    this.todo.title = "";
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
        color: #34d399;
        border-color: #34d399;
    }
    .active :hover {
        color: #fff;
        background-color: #34d399;
    }
    .inactive {
        color: #677777;
        border-color: #677777;
    }
    .inactive :hover {
        color: #ffffff;
        background-color: #677777;
        border-color: #677777;
    }
</style>