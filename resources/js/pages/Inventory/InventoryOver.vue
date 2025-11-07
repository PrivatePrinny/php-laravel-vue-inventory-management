<template>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Menge</th>
                <th>Lagerort</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in items" :key="item.id">
                <td>{{ item.name }}</td>
                <td>{{ item.amount }}</td>
                <td>{{ item.storage_place }}</td>
                <td>
                    <button @click="editItem(item.id)">Edit</button>
                    <button @click="deleteItem(item.id)">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>

import { ref, onMounted } from 'vue';


// Props
const props = defineProps({
  inventories: Array,
})

// Breadcrumbs
const breadcrumbs = [
  { title: 'Inventory', href: '/inventories' },
]

// Confirm delete handler
function confirmDelete(e) {
  if (!confirm('Are you sure?')) {
    e.preventDefault()
  }
}
</script>