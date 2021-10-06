<template>
    <div class="row">
        <div class="col-12">
            <div class="mt-4">
                <p>Nom : {{ this.infos.lastname }}</p>
                <p>Prénom : {{ this.infos.firstname }}</p>
                <p>E-mail : {{ this.infos.email }}</p>
                <p>Date de Naissance : {{ date_of_birth }}</p>
            </div>
        </div>
    </div>
</template>
<script>
import { formatDate } from '@/helpers/format-date';

export default {
    name: 'Infos',
    props: {
        infos: {
            type: Object,
            required: true,
        }
    },
    computed: {
        date_of_birth() {
            return formatDate(this.infos.date_of_birth);
        }
    }
}
</script>
