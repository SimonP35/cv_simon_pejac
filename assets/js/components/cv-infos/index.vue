<template>
    <div class="row">
        <div class="col-12">
            <div class="mt-4">
                <infos
                    :infos="infos"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Infos from '@/components/cv-infos/infos';

export default {
    name: 'Index',
    components: {
        Infos,
    },
    props: {
        infos: {
            type: Object,
            required: true,
        }
    }
}
</script>
