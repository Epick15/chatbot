<template>

  <BasePageHeading title="Personas"
    :subtitle="`Bienvenido@ ${$page.props.auth.user.name.split(' ')[0]}, a esta sección`">
    <template #extra>
      <button type="button" v-click-ripple class="btn btn-alt-primary push" data-bs-toggle="modal"
        data-bs-target="#modal-block-fromright">
        <i class="fa fa-plus opacity-50 me-1"></i>
        Nuevo
      </button>
    </template>
  </BasePageHeading>

  <div class="content">
    <!-- Basic -->
    <BaseBlock title="Listado de personas registradas en el sistema">
      <table class="table dataTable table-striped table-vcenter " id="tabla-personas">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px">#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Correo</th>
            <th>Celular</th>
            <th class="text-center" style="width: 100px">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in datos" :key="index">
            <th>{{ index + 1 }}</th>
            <th class="text-center">
              <img class="img-avatar img-avatar48" :src="'/imagenes/fotos/Persona/' + item.foto" alt="Avatar">
            </th>
            <td class="fw-semibold fs-sm">
              {{ item.nombres + ' ' + item.apellido_paterno + ' ' + item.apellido_materno }}
            </td>
            <td class="fw-semibold fs-sm">
              {{ item.identificacion }}
            </td>
            <td class="fw-semibold fs-sm">
              {{ item.correo }}
            </td>
            <td class="fw-semibold fs-sm">
              {{ item.celular }}
            </td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-primary" @click="editar_persona(item)"
                  data-bs-toggle="modal" data-bs-target="#modal-block-fromright">
                  <i class="fa fa-fw fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-danger">
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
  <div class="row push">
    <div class="modal fade" id="modal-block-fromright" tabindex="-1" role="dialog"
      aria-labelledby="modal-block-fromright" aria-hidden="true">
      <div class="modal-dialog modal-dialog-fromright modal-lg" role="document">
        <div class="modal-content">
          <BaseBlock title="Registrar Persona" transparent class="mb-0">
            <template #options>
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close"
                @click="limpiarModal">
                <i class="fa fa-fw fa-times"></i>
              </button>
            </template>
            <template #content>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <button class="btn btn-primary" data-password="false" @click="consultarReniec">
                          <i class="fa fa-fingerprint p-0 icono-renic"></i>
                        </button>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="example-group2-floating1" maxlength="8"
                            name="example-group2-floating1" placeholder="Username"
                            v-model="formularioPersona.identificacion" />
                          <label for="example-group2-floating1">Ingresar DNI y dar click en la huella</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="far fa-fw fa-user"></i>
                        </span>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="example-group2-floating1"
                            name="example-group2-floating1" placeholder="Username"
                            v-model="formularioPersona.nombres" />
                          <label for="example-group2-floating1">Nombres</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="far fa-fw fa-user"></i>
                        </span>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="example-group2-floating1"
                            name="example-group2-floating1" placeholder="Username"
                            v-model="formularioPersona.apellido_paterno" />
                          <label for="example-group2-floating1">Apellido paterno</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="far fa-fw fa-user"></i>
                        </span>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="example-group2-floating2"
                            name="example-group2-floating2" placeholder="Username"
                            v-model="formularioPersona.apellido_materno" />
                          <label for="example-group2-floating1">Apellido materno</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="far fa-fw fa-envelope"></i>
                        </span>
                        <div class="form-floating">
                          <input type="email" class="form-control" id="example-group2-floating2"
                            name="example-group2-floating2" placeholder="Email" v-model="formularioPersona.correo" />
                          <label for="example-group2-floating1">Correo</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="fa fa-phone"></i>
                        </span>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="example-group2-floating1"
                            name="example-group2-floating1" placeholder="Username" maxlength="9"
                            v-model="formularioPersona.celular" />
                          <label for="example-group2-floating1">Celular</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="row mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="far fa-calendar-days"></i>
                        </span>
                        <div class="form-floating">
                          <input type="date" class="form-control" v-model="formularioPersona.fecha_nacimiento" />
                          <label for="example-group2-floating1">Fecha nacimiento</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="si si-home"></i>
                        </span>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="example-group2-floating1"
                            name="example-group2-floating1" placeholder="Username"
                            v-model="formularioPersona.direccion" />
                          <label for="example-group2-floating1">Dirección</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="row mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="fa fa-photo-film"></i>
                        </span>
                        <div class="form-floating">
                          <input class="form-control" type="file" @change="obtenerImagen" />
                          <label for="example-group2-floating1">Foto</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <div class="form-floating">
                          <select class="form-control" v-model="formularioPersona.sexo">
                            <option :value="null">Seleccione...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                          </select>
                          <label for="example-group2-floating1">Sexo</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <div class="form-floating">
                          <select class="form-control" v-model="formularioPersona.estado_civil">
                            <option :value="null">Seleccione...</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                          </select>
                          <label for="example-group2-floating1">Estado civil</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-danger me-1" data-bs-dismiss="modal"
                  @click="limpiarModal">
                  Cerrar
                </button>
                <FormDataGuardar v-if="!registroActivo" :formData="formularioPersona" apiUrl="/api/guardar_persona"
                  @recarga-listado="obtenerDatos" />
                <FormDataGuardar v-else :formData="formularioPersona" apiUrl="/api/actualizar_persona"
                  @recarga-listado="obtenerDatos" />
              </div>
            </template>
          </BaseBlock>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import FormDataGuardar from '@/components/FormDataGuardar.vue'; // Ajusta la ruta si es necesario
export default {
  components: { FormDataGuardar },
  name: "Personas",
  data() {
    return {
      datos: [],       // Almacena los datos del backend
      loading: true,   // Controla el estado de carga
      formularioPersona: {
        id_persona: null,
        identificacion: null,
        nombres: null,
        apellido_materno: null,
        apellido_paterno: null,
        fecha_nacimiento: null,
        correo: null,
        direccion: null,
        sexo: null,
        estado_civil: null,
        celular: null,
        foto: null,
      },
      registroActivo: false,
    };
  },

  methods: {
    async obtenerDatos() {
      try {
        const respuesta = await axios.get("/api/personas");
        this.datos = respuesta.data; // Suponiendo que la API devuelve un array de datos
        this.$nextTick(() => {
          // Asegúrate de limpiar completamente la instancia anterior
          if ($.fn.DataTable.isDataTable("#tabla-personas")) {
            $("#tabla-personas").DataTable().clear().destroy();
          }
          // Re-inicializar DataTables
          $("#tabla-personas").DataTable({});
        });
      } catch (error) {
        console.error("Error al obtener los datos:", error);
      } finally {
        this.loading = false;
      }
    },

    editar_persona(persona) {
      this.formularioPersona = {
        id_persona: persona.id_persona,
        identificacion: persona.identificacion,
        nombres: persona.nombres,
        apellido_paterno: persona.apellido_paterno,
        apellido_materno: persona.apellido_materno,
        fecha_nacimiento: persona.fecha_nacimiento,
        direccion: persona.direccion,
        sexo: persona.sexo,
        celular: persona.celular,
        correo: persona.correo,
        estado_civil: persona.estado_civil,
      };
      this.registroActivo = true;
    },


    async consultarReniec() {
      if (this.formularioPersona.identificacion) {
        let response = await axios.post(`/api/consulta-reniec`, { doc: this.formularioPersona.identificacion, });
        this.formularioPersona.nombres = response.data.nombres;
        this.formularioPersona.apellido_materno = response.data.apellidoMaterno;
        this.formularioPersona.apellido_paterno = response.data.apellidoPaterno;
      }
    },

    obtenerImagen(event) {
      let imagen = event.target.files[0];
      this.formularioPersona.foto = imagen;
    },

    manejarExito(mensaje) {
      console.log("Success:", mensaje);
    },
    manejarError(mensaje) {
      console.log("Error:", mensaje);
    },

    limpiarModal() {
      this.formularioPersona = {
        id_persona: null,
        identificacion: null,
        nombres: null,
        apellido_paterno: null,
        apellido_materno: null,
        fecha_nacimiento: null,
        direccion: null,
        sexo: null,
        celular: null,
        foto: null,
        estado_civil: null,
      };
      this.registroActivo = false;
    },
  },

  created() {
    this.obtenerDatos(); // Carga inicial al montar el componente
  },
};
</script>

<style scoped>
/* Estilos específicos para tu vista */
</style>