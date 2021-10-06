<template>
    <index
        :infos="infos"
    />
</template>

<script>
import Index from '@/components/cv-infos/index'; 
import { fetchUserInfos } from '@/services/users-service'; 

export default {
    name: 'Cv',
    components: {
        Index,
    },
    data() {
        return {
            infos: [],
        }
    },
    async created() {
        let response = await fetchUserInfos();
        this.infos = response.data.user;
    },
}
</script>
