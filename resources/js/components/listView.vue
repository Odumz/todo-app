<template>
    <div class="container">
        <div class="tw-h-100 tw-w-full tw-flex tw-items-center tw-justify-center tw-font-sans">
                <div class="tw-bg-white tw-rounded tw-ring tw-p-6 tw-m-4 tw-w-full lg:tw-w-3/4 lg:tw-max-w-lg">
                    <div class="tw-mb-8">
                        <div class="tw-flex tw-mx-auto tw-items-center tw-justify-center" v-for="(todo, index) in todos" :key="index">
                            <!-- <p class="tw-w-full tw-text-gray-600" :class="[done ? 'tw-line-through tw-text-green-500' : '']">Add another component to Tailwind Components</p> -->
                            <list-todo 
                                :todo="todo"
                                v-on:todochanged="$emit('reloadlist')" />
                            
                            <!-- <button class="tw-flex-no-shrink tw-p-2 tw-ml-4 tw-mr-2 tw-border-2 tw-rounded hover:tw-text-white tw-text-green tw-border-green hover:tw-bg-green" v-on:click=toggleDone() >Done</button> -->
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