<template>
    <div>
        <ul>
            <li v-for="(item, index) in items" :key="index">
                <slot name="menu-item" :item="item">{{ item }}</slot> 
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['items']
}
</script>