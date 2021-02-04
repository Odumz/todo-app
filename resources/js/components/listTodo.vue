<template>
    <div class="container">
        <input :class="[todo.done ? 'done' : '']"  type="checkbox" @change="updateCheck()" class="tw-mx-2 round">
        <label :class="[todo.done ? 'done' : '']" for="one">{{ todo.title }}</label>
        <button class="tw-flex-no-shrink tw-p-2 tw-ml-2 tw-rounded tw-text-red-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </button>
    </div>
</template>
<script>
export default {
    props: ['todo'],
    methods: {
        updateCheck() {
            this.done = !this.done
        },
    },
}
</script>
<style scoped>
    .done {
        text-decoration: line-through;
        color: #999999;
    }
    .round {
        border-radius: 50px;
    }
</style>