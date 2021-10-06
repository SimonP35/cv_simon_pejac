<template>
    <div :class="[$style.component, 'p-3', 'mb-5']">
        <div v-show="!collapsed">
            <h5 class="text-center">
                Menu
            </h5>

            <ul class="nav flex-column mb4">
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >A Propos</a>
                </li>
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >Diplômes et Formations</a>
                </li>
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >Expériences Professionnelles</a>
                </li>
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >Compétences</a>
                </li>
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >Centre d'Intérêts</a>
                </li>
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >Réseaux Sociaux</a>
                </li>   
                <li class="nav-item">
                    <a
                        :class="{
                            'nav-link': true,
                        }"
                        href="/"
                    >Informations Diverses</a>
                </li>                                               
            </ul>
            <hr>
        </div>

        <div class="d-flex justify-content-end">
            <button
                class="btn btn-secondary btn-sm"
                @click="$emit('toggle-collapsed')"
                v-text="collapsed ? '>>' : '<< Réduire'"
            />
        </div>
    </div>
</template>

<script>
export default {
    name: 'Sidebar',
    props: {
        collapsed: {
            type: Boolean,
            required: true,
        },
    },
};
</script>

<style lang="scss" module>
@import '~styles/components/light-component';

.component :global {
    @include light-component;

    ul {
        li a:hover {
            background: $blue-component-link-hover;
        }

        li a.selected {
            background: $light-component-border;
        }
    }
}
</style>
