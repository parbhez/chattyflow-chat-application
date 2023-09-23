
<template>

    <div>
        <div class="flex justify-center gap-4">
            <div class="mb-4 text-left w-full">
                <label for="phone" class="block text-sm mb-2">First Name</label>
                <input
                id="name"
                type="text"
                v-model="formData.name"
                class="text-sm border-1 rounded-xl py-3 px-2 w-full focus:border-primary border-bord"
                placeholder="Enter your name"
                />
            </div>

            <div class="mb-4 text-left w-full">
                <label for="phone" class="block text-sm mb-2" >Email:</label>
                <input
                class="text-sm border-1 rounded-xl py-3 px-2 w-full focus:border-primary border-bord"
                    id="email"
                    type="email"
                    v-model="formData.email"
                    placeholder="Enter your Email"
                />
            </div>

            
        </div>
        

        <label for="phone" class="block text-sm mb-2 text-left">Your phone number:</label>
        <input
        class="text-sm border-1 rounded-xl py-3 px-2 w-full focus:border-primary border-bord"
            id="phone"
            type="tel"
            v-model="formData.customer_phone"
            placeholder="Enter phone number"
        />

        <label for="address" class="block text-sm mb-2 text-left mt-3">Your Address</label>
        <textarea
        class="text-sm border-1 rounded-xl py-3 px-2 w-full focus:border-primary border-bord"
            id="address"
            v-model="formData.address"
            placeholder="Enter your address"
        ></textarea>

     
    </div>
</template>

<script>

export default {
    props: {
        formData: {
            type: Object,
            required: true,
        },
    },
    methods: {
        // Emit the event to indicate the "Next" button is clicked
        emitNextStepEvent() {
            this.$emit("next-step-clicked");
        },
    },
};
</script>