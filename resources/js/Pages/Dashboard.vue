<template>
    <div>
        {{ title }}
        <NovaMesa title="NovaVue" body="[]" />
        <Link href="mesas">Mesas</Link>
    </div>
</template>

<script>
import NovaMesa from "../Components/Mesas/Nova.vue";

export default {
    components: {
        NovaMesa,
    },
    props: {
        title: String,
    },
};
</script>
