<template>
    <div>
        <h2>Submit a Service Request</h2>
        <form @submit.prevent="submitRequest">
            <input
                type="text"
                v-model="name"
                placeholder="Your Name"
                required
            />
            <input
                type="email"
                v-model="email"
                placeholder="Your Email"
                required
            />
            <textarea
                v-model="description"
                placeholder="Describe your request"
                required
            ></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            email: "",
            description: "",
        };
    },
    methods: {
        submitRequest() {
            axios
                .post("/api/service-requests", {
                    name: this.name,
                    email: this.email,
                    description: this.description,
                })
                .then((response) => {
                    alert(response.data.message);
                    this.name = "";
                    this.email = "";
                    this.description = "";
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
};
</script>
