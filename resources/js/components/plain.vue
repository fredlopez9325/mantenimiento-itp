<template>
    <div class="row">
        <div class="col-12 mb-2">
            <button @click="addInput" class="btn btn-primary">Agregar un nuevo servicio</button>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form v-on:submit.prevent="save">
                                <div class="row" v-for="(plan, key) in plains" v-bind:key="key">
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label for="">N</label>
                                            <input  v-model="plan.number" required type="number" class="form-control disabled">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Servicio</label>
                                            <input v-model="plan.servicio" required type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Tipo</label>
                                            <select v-model="plan.tipo" required name=""  class="form-control">
                                                <option value="X">X</option>
                                                <option value="I">I</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">E</label>
                                            <select v-model="plan.e" required name=""  class="form-control">
                                                <option value="P">P</option>
                                                <option value="R">R</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" @click="deleteInput(key)" class="btn btn-danger btn-outline mt-2 mb-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return  {
            plains: [
                { number: 0, servicio: '', tipo: '', e: '' }
            ]
        }
    },
    methods: {
        addInput() {
            this.plains.push({ number: '', servicio: '', tipo: '', e: '' })
        },
        deleteInput (index) {
            this.plains.splice(this.plains.indexOf(index), 1);
        },
        save () {
            axios.post(`/plan/${this.id}/store`, this.plains)
                .then(res => {
                    window.location.href = '/preventivo';
                })
                .catch(err => function() {
                    alert(err)
                })
        }
    }
}
</script>
