<template>
    <button @click="guardarDatos" type="button" class="btn btn-sm btn-alt-success me-1" data-bs-dismiss="modal">
        Guardar
    </button>
</template>

<script>
export default {
    props: {
        formData: {
            type: Object,
            required: true
        },
        apiUrl: {
            type: String,
            required: true
        }
    },
    methods: {
        async guardarDatos() {
            try {
                let formData = new FormData();
                // Añadir dinámicamente los campos del objeto formData
                for (let key in this.formData) {
                    formData.append(key, this.formData[key]);
                }
                let response = await axios.post(this.apiUrl, formData);
                if (response.data) {
                    this.$emit('recarga-listado'); // Emitir evento al guardar exitosamente
                } else {
                    console.log("Error al guardar");
                }
            } catch (error) {
                console.error("Error al registrar persona:", error);
            }
        }
    }
};
</script>