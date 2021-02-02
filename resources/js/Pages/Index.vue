<template>
    <div class="tw-h-screen tw-w-screen tw-py-10 tw-px-4 md:tw-p-auto tw-bg-gradient-to-r tw-bg-gradient tw-from-green-400 tw-via-blue-500 tw-to-gray-800">
        <div class=" tw-min-h-0">
            <div class="">
                <div class="tw-bg-indigo-600 tw-mb-10 tw-mx-auto tw-w-3/6">
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
            <list-view />
            <add-todo-form />
        </div>
        
    </div>
</template>

<script>
import AddTodoForm from '../components/addTodoForm.vue';
import ListView from '../components/listView.vue';

export default {
    name: "app",
    metaInfo() {
      return {
        title: `Welcome ${this.user.name}`,
      }
    },
    data() {
        return {
            done: false,
            todo: {},
        }
    },
    props: {
        todo: Object,
    },
    methods: {
        toggleDone: function () {
            this.done = !this.done
        }
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