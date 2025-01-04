<template>
    <div v-if="user" class="modal" tabindex="-1" role="dialog" id="myModal" ref="modalElement">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="success" v-if="application">
                        <h1>Apply Successful</h1>
                    </div>
                    <form
                        class="rounded shadow p-4"
                        @submit.prevent="handleSubmit"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        <div v-if="job && candidate">
                            <input type="text" name="job_id" :value="job.id" />
                            <input type="hidden" name="employeer_id" :value="job.employeer_id" />
                            <input type="hidden" name="candidate_id" :value="candidate.id" />
                        </div>
  
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Name: <span class="text-danger">*</span></label>
                                    <input
                                        name="name"
                                        id="name2"
                                        type="text"
                                        class="form-control"
                                        v-model="form.name"
                                        placeholder="Your Name:"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email: <span class="text-danger">*</span></label>
                                    <input
                                        name="email"
                                        id="email2"
                                        type="text"
                                        class="form-control"
                                        v-model="form.email"
                                        placeholder="Your Email:"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Phone no.: <span class="text-danger">*</span></label>
                                    <input
                                        name="contact"
                                        id="number2"
                                        type="text"
                                        class="form-control"
                                        v-model="form.contact"
                                        placeholder="Your phone no.:"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="formFile">Upload Your Cv / Resume:</label>
                                    <input
                                        class="form-control"
                                        name="pdf"
                                        type="file"
                                        id="formFile"
                                        @change="onFileChange"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I Accept <a href="#" class="text-primary">Terms And Condition</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                        <div class="row">
                            <div class="col-12">
                                <button v-if="application" type="button" class="btn btn-danger mr-15">Already Applied</button>
                                <input v-else type="submit" id="submit2" name="send" class="submitBnt btn btn-primary" value="Apply Now" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';

const { job, candidate, application, user } = usePage().props;

// Log candidate data for debugging
console.log('Candidate Data:', candidate);

const form = useForm({
    name: candidate ? candidate.name : '',
    email: candidate ? candidate.email : '',
    contact: '',
    pdf: null,
    candidate_id: candidate ? candidate.id : '',
    job_id: job ? job.id : '',
    employeer_id: job ? job.employeer_id : ''
});

const successMessage = ref('');
const modalElement = ref(null);

const handleSubmit = () => {
    console.log('Form Data:', form);

    form.post(route('apply.job', job.id), {
        onSuccess: () => {
            console.log('Form submission successful');
            successMessage.value = 'Successfully Applied';
        },
        onError: (errors) => {
            console.error('Form submission failed', errors);
        }
    });
};
  
const onFileChange = (e) => {
    form.pdf = e.target.files[0];
};

// Ensure Bootstrap Modal Initialization
onMounted(() => {
    if (modalElement.value) {
        const myModal = new bootstrap.Modal(modalElement.value, {
            backdrop: 'static'
        });

        document.querySelector('.btn-success').addEventListener('click', () => {
            myModal.show();
        });
    } else {
        console.error('Modal element not found.');
    }
});
</script>

<style lang="scss" scoped></style>
