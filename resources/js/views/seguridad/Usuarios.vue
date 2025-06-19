<template>
  <BasePageHeading title="Usuarios"
    :subtitle="`Bienvenido@ ${$page.props.auth.user.name.split(' ')[0]}, a esta sección`">
    <template #extra>
      <button type="button" class="btn btn-alt-primary" v-click-ripple>
        <i class="fa fa-plus opacity-50 me-1"></i>
        Añadir
      </button>
    </template>
  </BasePageHeading>

  <div class="content">
    <!-- Basic -->
    <BaseBlock title="Listado de módulos del sistema">
      <table class="table table-striped table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px">#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th class="text-center" style="width: 100px">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in datos" :key="index">
            <th>{{ index + 1 }}</th>
            <td class="fw-semibold fs-sm">
              {{ item.name }}
            </td>
            <td class="fw-semibold fs-sm">
              {{ item.email }}
            </td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-fw fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-fw fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </BaseBlock>
    <!-- END Basic -->
  </div>
</template>

<script>
export default {
  name: "Usuarios",


  data() {
    return {
      datos: [],       // Almacena los datos del backend
      loading: true,   // Controla el estado de carga
    };
  },

  methods: {
    async obtenerDatos() {
      try {
        const respuesta = await axios.get("/api/usuarios");
        this.datos = respuesta.data; // Suponiendo que la API devuelve un array de datos
      } catch (error) {
        console.error("Error al obtener los datos:", error);
      } finally {
        this.loading = false;
      }
    },
  },

  mounted() {
    this.obtenerDatos(); // Carga inicial al montar el componente
  },
};
</script>

<style scoped>
/* Estilos específicos para tu vista */
</style>