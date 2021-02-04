<template>
    <div class="container">
        <div class="tw-h-100 tw-w-full tw-flex tw-items-center tw-justify-center tw-font-sans">
                <div class="tw-bg-white tw-rounded tw-ring tw-p-6 tw-m-4 tw-w-full lg:tw-w-3/4 lg:tw-max-w-lg">
                    <div class="">
                        <div class="tw-flex tw-mb-4 tw-items-center tw-justify-center" v-for="(todo, index) in todos" :key="index">
                            <!-- <p class="tw-w-full tw-text-gray-600" :class="[done ? 'tw-line-through tw-text-green-500' : '']">Add another component to Tailwind Components</p> -->
                            <list-todo 
                                :todo="todo" />
                            
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-4 tw-mr-2 tw-border-2 tw-rounded hover:tw-text-white tw-text-green tw-border-green hover:tw-bg-green" v-on:click=toggleDone() >Done</button>
                        </div>
                        <div class="tw-flex tw-mb-4 tw-items-center">
                            <p class="tw-w-full tw-text-gray-600" :class="[done ? 'tw-line-through tw-text-green-500' : '']">Submit Todo App Component to Tailwind Components</p>
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-4 tw-mr-2 tw-border-2 tw-rounded hover:tw-text-white tw-text-green tw-border-green hover:tw-bg-green" v-on:click=toggleDone() >Done</button>
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-2 tw-rounded tw-text-red-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>
<script>
import listTodo from "./listTodo"
export default {
    props: ['todos'],
    components: {
        listTodo
    }
}
</script>
<style scoped>
    
</style>