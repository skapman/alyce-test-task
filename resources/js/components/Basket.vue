<template>
    <div>
        <h3>Basket</h3>
        <ul class="list-group basket">
            <li
                v-for="item in basket"
                :key="item"
                class="list-group-item"
            >
                <span>{{item}}</span>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'Basket',
        props: ['basket']
    }
</script>

<style scoped>
h3 {
    color: #95a5a6;
    font-weight: 400;
}
</style>
