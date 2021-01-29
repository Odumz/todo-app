<template>
    <div>
        <p class="tw-font-bold">Welcome {{title}}</p>
    </div>
</template>

<script>
export default {
    props: ['title', 'description']
}
</script>