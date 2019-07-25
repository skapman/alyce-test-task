<template>
    <div class="container-fluid">
        <header>
            <h3>Users</h3>
        </header>
        <section>
            <ul class="list-group">
                <li
                    v-for="user of users"
                    class="list-group-item"
                    :key="user.id"
                >
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        {{user.name}}
                        <span>
                        <span class="badge badge-primary badge-pill">
                            {{user.apples.length}}
                        </span>
                        <button class="btn btn-danger btn-sm grab-apple"
                                @click="$emit('takeApple', user.id)"
                        >
                            Grab apple
                        </button>
                    </span>
                    </div>
                    <div class="col-12" v-if="user.apples.length">
                        <ul>
                            <li
                                v-for="apple of user.apples"
                            >
                                Apple{{apple.id}}
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </section>
        <section class="free-button">
            <a
                @click="$emit('freeApples')"
                class="btn btn-lg btn-success text-center free-apples"
            >
                Free Apples
            </a>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Users',
    props: ['users'],
};
</script>

<style scoped>
h3 {
    color: #95a5a6;
    font-weight: 400;
}

.free-button {
    text-align: right;
    padding-top: 15px;
    cursor: pointer;
    color: white;
}

.grab-apple {
    margin-left: 10px;

}
</style>
