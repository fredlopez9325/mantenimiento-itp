<template>
    <div class="col-12">
        <div >
            <div class="card">
                <div class="card-header bg-white mb-0">
                    <h4 class="mb-0">
                        Agregar detalles
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <button @click="addInput" class="btn btn-primary mb-3">
                                Añadir un nuevo hallazgo
                            </button>
                        </div>
                    </div>
                    <form v-on:submit.prevent="save">
                        <div class="row" v-for="(formato, key) in formatos" v-bind:key="key">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Espacio revisado</label>
                                    <input v-model="formato.espacio_revizado" required type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Hallazgo</label>
                                    <input v-model="formato.hallazgo" required type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Atendido</label>
                                    <select  v-model="formato.atendido" required name="" id="" class="form-control">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button @click="deleteInput(key)" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary mt-4">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            formatos: [
                { hallazgo: '', espacio_revizado: '', atendido: '' }
            ]
        }
    },
    methods: {
        addInput () {
            this.formatos.push({ hallazgo: '', espacio: '', atendido: '' })
        },
        deleteInput (index) {
            this.formatos.splice(this.formatos.indexOf(index), 1);
        },
        save () {
            axios.post(`/area/${this.id}`, this.formatos)
                .then(res => {
                    window.location.href = '/infraestructura';
                })
                .catch(err => console.error(err))
        }
    }
}
</script>
