<template>
    <div class="container tw-flex tw-flex-col tw-content-center md:tw-flex-row tw-my-2">
        <div class="tw-w-5/6 md:tw-w-2/3 sm:tw-w-2/3">
            <input v-if="!this.edit" v-model="todo.done" :class="[todo.done ? 'done' : '', 'tw-mx-2']"  type="checkbox" @change="updateCheck()">
            <label v-if="!this.edit" :class="[todo.done ? 'done' : '']" for="one">{{ todo.title }}</label>
            <input v-if="this.edit" v-model="todo.title" class="tw-border-b-2 tw-border-green-400 tw-px-5 tw-w-5/6 tw-outline-none" type="text" value="todo.title" @change="updateCheck()" @click="edit()">
            <!-- <label :class="[todo.done ? 'done' : '']" for="one">{{ todo.title }}</label> -->
        </div>
        <div class="tw-w-1/6 md:tw-w-1/3 sm:tw-w-1/3 tw-flex  tw-flex-row">
            <button v-if="!this.edit" class="tw-flex-no-shrink sm:tw-p-2 sm:tw-ml-2 tw-rounded tw-text-blue-400 hover:tw-text-blue-700" @click="editTodo(todo.id)">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
            </button>
            <button v-if="this.edit" class="tw-flex-no-shrink tw-p-2 tw-ml-2 tw-rounded tw-text-green-400 hover:tw-text-green-700" @click="updateTodo()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
            </button>
            <button class="tw-flex-no-shrink tw-p-2 tw-ml-2 tw-rounded tw-text-red-400 hover:tw-text-red-700" @click="removeTodo()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
            </button>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
import swal from 'sweetalert'

export default {
    props: ['todo'],
    data() {
        return {
            edit: false,
        }
    },
    methods: {
        updateCheck() {
            // this.done = !this.done
            axios.put(`api/todo/`+ this.todo.id, {
                todo: this.todo
            })
            .then ( response => {
                if (response.status == 200 ) {
                    this.$emit('todochanged');
                }
            })
            .catch ( error => {
                console.log(error);
            })
        },
        removeTodo() {
            axios.delete(`api/todo/`+ this.todo.id, {
                todo: this.todo
            })
            .then ( response => {
                if (response.status == 200 ) {
                    this.$emit('todochanged');
                    return swal({
                        title: 'Deleted!',
                        text: 'Todo deleted successfully!',
                        icon: 'success'
                        });
                }
            })
            .catch ( error => {
                console.log(error);
            })
        },
        updateTodo() {
            axios.put(`api/todo/`+ this.todo.id, {
                todo: this.todo
            })
            .then ( response => {
                if (response.status == 200 ) {
                    this.$emit('todochanged');
                    swal({
                        title: 'Updated',
                        text: 'Todo updated successfully', icon: 'success'
                        });
                    return this.edit = false;
                }
            })
            .catch ( error => {
                console.log(error);
            })
        },
        editTodo($id) {
            return this.edit = true;
        }
    },
}
</script>
<style scoped>
    .done {
        text-decoration: line-through;
        color: #999999;
    }

</style>