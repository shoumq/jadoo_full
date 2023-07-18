<template>
    <div class="container">
        <Header></Header>
        <div class="mt70">
            <div class="list-title">Все заявки</div>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>User_id</th>
                    <th>User_name</th>
                </tr>
                <tr v-for="item in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.email }}</td>
                    <td>{{ item.user_id }}</td>
                    <td>{{ item.user_name }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
import Header from "../Components/Header.vue";

export default {
    components: {Header},

    props: ['items'],
}
</script>


<style lang="sass" scoped>
*
    font-family: Montserrat

.mt70
    margin-top: 70rem

table
    margin-top: 30rem
    font-family: arial, sans-serif
    border-collapse: collapse
    width: 100%

td, th
    border: 1px solid #b2b2b2
    text-align: left
    padding: 8rem
    font-size: 15rem


tr:nth-child(even)
    background-color: #dddddd

.list-title
    font-size: 25rem
    font-weight: 500
</style>
