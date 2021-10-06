<template>
    <div class="container-fluid">
        <div class="row">
            <aside :class="asideClass">
                <sidebar
                    :collapsed="sidebarCollapsed"
                    @toggle-collapsed="toggleSidebarCollapsed"
                />
            </aside>

            <div :class="contentClass">
                <cv
                />
            </div>
        </div>
    </div>
</template>

<script>
import Cv from '@/components/cv';
import Sidebar from '@/components/sidebar';

export default {
    name: 'Users',
    components: {
        Cv,
        Sidebar,
    },
    data() {
        return {
            sidebarCollapsed: false,
        };
    },
    computed: {
        asideClass() {
            return this.sidebarCollapsed ? 'aside-collapsed' : 'col-xs-12 col-3';
        },
        contentClass() {
            return this.sidebarCollapsed ? 'col-xs-12 col-11' : 'col-xs-12 col-9';
        },
    },
    methods: {
        toggleSidebarCollapsed() {
            this.sidebarCollapsed = !this.sidebarCollapsed;
        },
    },
};
</script>