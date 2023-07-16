<template>
    <div>
        <h3>{{ title }}</h3>
        <div>{{ body }}</div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        body: Object,
    },
};
</script>
