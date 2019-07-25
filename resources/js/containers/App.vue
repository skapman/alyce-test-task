<script>
import { mapActions, mapGetters } from 'vuex';
import actions from '../store/actions';
import AlertBox from '../components/AlertBox.vue';
import Users from '../components/Users.vue';
import Basket from '../components/Basket.vue';

export default {
    name: 'App',
    components: {
        AlertBox,
        Users,
        Basket,
    },
    computed: mapGetters({
        users: 'currentUsers',
        basket: 'currentBasket'
    }),
    created: function () {
        actions.getUsers(this.$store);
        actions.getBasket(this.$store);
    },
    methods: mapActions({
        takeApple: (dispatch, id) => dispatch('takeApple', id),
        freeAllApples: (dispatch) => dispatch('freeApples')
    })
};
</script>

<template>
    <div class="container-fluid test-task">
        <div class="navbar ">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <b>Alyce - Test Task</b>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 alerts">
                    <alert-box />
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <users
                        :users="users"
                        @takeApple="takeApple"
                        @freeApples="freeAllApples"
                    />
                </div>
                <div class="col-6">
                    <basket :basket="basket"/>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.alerts {
    min-height: 70px;
}
.test-task {
    padding: 0;
}
.navbar {
    background-color: #3498db;
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
</style>
