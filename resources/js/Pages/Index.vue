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
                                Workflow Todo Application.
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
            <div class="tw-h-100 tw-w-full tw-flex tw-items-center tw-justify-center tw-bg-green-lightest tw-font-sans">
                <div class="tw-bg-white tw-rounded tw-shadow tw-p-6 tw-m-4 tw-w-full lg:tw-w-3/4 lg:tw-max-w-lg">
                    <div class="tw-mb-4">
                        <h1 class=" tw-text-gray-700">Todo List</h1>
                        <div class="tw-flex tw-mt-4">
                            <input class="tw-shadow tw-appearance-none tw-border tw-border-green-300 hover:tw-border-green-500 focus:tw-border-green-500 tw-rounded tw-w-full tw-py-2 tw-px-3 tw-mr-4 tw-text-gray-800" placeholder="Add Todo">
                            <button class="tw-flex-no-shrink tw-p-2 tw-border-2 tw-rounded tw-text-green-400 tw-border-green-400 hover:tw-text-white hover:tw-bg-green-400">Add</button>
                        </div>
                    </div>
                    <div>
                        <div class="tw-flex tw-mb-4 tw-items-center">
                            <p class="tw-w-full tw-text-gray-700">Add another component to Tailwind Components</p>
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-4 tw-mr-2 tw-border-2 tw-rounded hover:tw-text-white tw-text-green tw-border-green hover:tw-bg-green">Done</button>
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-2 tw-border-2 tw-rounded tw-text-red tw-border-red hover:tw-text-white hover:tw-bg-red">Remove</button>
                        </div>
                        <div class="tw-flex tw-mb-4 tw-items-center">
                            <p class="tw-w-full tw-line-through tw-text-green">Submit Todo App Component to Tailwind Components</p>
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-4 tw-mr-2 tw-border-2 tw-rounded hover:tw-text-white tw-text-grey tw-border-grey hover:tw-bg-grey">Not Done</button>
                            <button class="tw-flex-no-shrink tw-p-2 tw-ml-2 tw-border-2 tw-rounded tw-text-red-500 tw-border-red-500 hover:tw-text-white hover:tw-bg-red-500">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <p class="tw-font-bold">Welcome {{title}}</p>
        </div>
        
    </div>
</template>

<script>
export default {
    props: ['title', 'description']
}
</script>

<style scoped>
background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
</style>