<template>

  <BasePageHeading title="Permisos"
    :subtitle="`Bienvenido@ ${$page.props.auth.user.name.split(' ')[0]}, a esta sección`">
    <template #extra>
      <!-- <button type="button" class="btn btn-alt-primary" v-click-ripple>
      <i class="fa fa-plus opacity-50 me-1"></i>
      Main Action
    </button> -->
    </template>
  </BasePageHeading>
</template>

<script>
export default {
  name: "Permisos",
};
</script>

<style scoped>
/* Estilos específicos para tu vista */
</style>