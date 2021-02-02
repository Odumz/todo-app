<template>
    <div class="container">
        <div class="tw-mb-4">
            <!-- <h1 class=" tw-text-gray-700">Todo List</h1> -->
            <div class="tw-flex tw-mt-4">
                <input class="tw-ring-1 tw-appearance-none tw-border tw-border-green-300 hover:tw-border-green-500 focus:tw-border-green-500 tw-rounded tw-w-full tw-py-2 tw-px-3 tw-mr-4 tw-text-gray-800" placeholder="Add Todo">
                <button class="tw-flex-no-shrink tw-p-2 tw-border-2 tw-rounded tw-text-green-400 tw-border-green-400 hover:tw-text-white hover:tw-bg-green-400" @click="()=>$router.push('/todo/store')">Adder</button>
            </div>
        </div>        
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    
</style>