<template>
    <div>
        <v-table>
            <thead>
            <tr>
                <th class="text-left">
                Usuario
                </th>
                <th class="text-left">
                Comentario
                </th>
            </tr>
            </thead>
            <tbody>
            <tr
                v-for="user in props.users"
                :key="user.id"
            >
                <td>{{ user.name }}</td>
                <td>{{ user.calories }}</td>
            </tr>
            </tbody>
    </v-table>
    </div>
</template>

<script lang="ts" setup>
// import { ref } from 'vue';

    interface User {
        id: number;
        name: string;
        calories: number;
    }
    // const users = [
    //     {id: 1, name: 'John', calories: 300 },
    //     {id: 2, name: 'Jane', calories: 400 },
    //     {id: 3, name: 'Joe', calories: 500 },
    // ]
    const props = {
        users: <User[]>([
            {id: 1, name: 'John', calories: 300 },
            {id: 2, name: 'Jane', calories: 400 },
            {id: 3, name: 'Joe', calories: 500 },
        ])
    };

</script>

<style scoped>


</style>