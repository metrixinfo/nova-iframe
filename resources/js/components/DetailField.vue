<template>
    <panel-item :field="field">
        <template slot="value">
            <iframe v-if="showIframe" :width="width" :height="height" :class="classes" :style="style" :srcdoc="field.value"></iframe>
            <p v-else>—</p>
        </template>
    </panel-item>
</template>

<script>
export default {

    props: ['resource', 'resourceName', 'resourceId', 'field'],

    data: () => ({
        width: "100%",
        height: 600,
        classes: null,
        style: null,
        showIframe: false,
    }),

    mounted: function () {

        console.log(this.field);

        // Set the width
        if (this.field.hasOwnProperty('width')) {
            this.width = this.field.width;
        }

        // Set the height
        if (this.field.hasOwnProperty('height')) {
            this.height = this.field.height;
        }

        // Set the classes
        if (this.field.hasOwnProperty('classes')) {
            this.classes = this.field.classes;
        }

        // Set the style
        if (this.field.hasOwnProperty('style')) {
            this.style = this.field.style;
        }

        // Only show iframe if we have a value
        if (this.field.value) {
            this.showIframe = true;
        }
    }
}
</script>
