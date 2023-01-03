<script setup>
    import useSkills from '../../composable/skills';
    import { onMounted } from "vue";

    const { skills, getSkills } = useSkills();

    onMounted(() => getSkills());

</script>
<template>
    <div class="mt-12">
        
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Slug
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Controls
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="skill in skills" :key="skill.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">{{ skill.name }}</td>
                        <td class="py-4 px-6">{{ skill.slug }}</td>
                        <td class="py-4 px-6 text-red-500">Edit/Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>