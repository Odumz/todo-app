<template>
    <div class="tw-h-screen tw-w-screen tw-py-10 tw-px-4 md:tw-p-auto tw-bg-gradient-to-r tw-bg-gradient tw-from-green-400 tw-via-blue-500 tw-to-gray-800">
        <div class="tw-flex tw-flex-col">
            <div class="">
                <div class="tw-bg-indigo-600 tw-mb-3 tw-mx-auto tw-w-3/6">
                    <div class="tw-max-w-7xl tw-mx-auto tw-py-3 tw-px-3 sm:tw-px-6 lg:tw-px-8">
                        <div class="tw-flex tw-items-center tw-justify-between tw-flex-wrap">
                        <div class="tw-w-0 tw-flex-1 tw-flex tw-items-center">
                            <span class="tw-flex p-2 tw-rounded-lg tw-bg-indigo-800">
                                <!-- Heroicon name: menu -->
                                <svg class="tw-h-6 tw-w-6 tw-text-white"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </span>
                            <p class="tw-ml-3 tw-font-medium tw-text-white tw-truncate">
                            <span class="md:tw-hidden">
                              a  Workflow Todo Application.
                            </span>
                            <span class="tw-hidden md:tw-inline">
                                Workflow Todo Application. Keep a neat schedule!
                            </span>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="">
                <svg class="tw-h-6 tw-w-6 tw-text-white"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div> -->
            <!-- component -->
            <list-view class="tw-w-2/3" :todos="todos"
            v-on:reloadlist="getTodo()"/>
            <add-todo-form class="tw-flex tw-justify-center tw--mt-14" v-on:todochanged="getTodo()" />
        </div>
        
    </div>
</template>

<script>
import AddTodoForm from '../components/addTodoForm.vue';
import ListView from '../components/listView.vue';
import axios from 'axios';

export default {
    // name: "app",
    metaInfo() {
      return {
        title: `Welcome Alfred!`,
      }
    },
    data() {
        return {
            todos: []
        }
    },
    props: {
        todo: Object,
    },
    methods: {
        getTodo () {
            axios.get('api/todo')
            .then (response => {
                this.todos = response.data
            })
            .catch (error => {
                console.log(error);
            })
        }
    },
    created() {
        // console.log('I have gotten here')
        this.getTodo();
    },
    components: {
        AddTodoForm,
        ListView
    }
}
</script>

<style scoped>
/* background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%); */
</style>