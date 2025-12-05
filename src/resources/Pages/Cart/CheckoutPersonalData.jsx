import { useForm } from "@inertiajs/react";

export default function CheckoutPersonalData() {
    const { data, setData, post, errors } = useForm({
        first_name: "",
        last_name: "",
        email: "",
        phone: "",
    });

    function submit(e) {
        e.preventDefault();
        post("/cart/checkout/personal-data");
    }

    return (
        <div className="max-w-lg mx-auto p-6 space-y-4">
            <h1 className="text-2xl font-bold">Personal Details</h1>

            <form onSubmit={submit} className="space-y-4">

                <input
                    className="border rounded px-3 py-2 w-full"
                    placeholder="First Name"
                    value={data.first_name}
                    onChange={(e) => setData("first_name", e.target.value)}
                />
                {errors.first_name && <p className="text-red-500">{errors.first_name}</p>}

                <input
                    className="border rounded px-3 py-2 w-full"
                    placeholder="Last Name"
                    value={data.last_name}
                    onChange={(e) => setData("last_name", e.target.value)}
                />
                {errors.last_name && <p className="text-red-500">{errors.last_name}</p>}

                <input
                    className="border rounded px-3 py-2 w-full"
                    placeholder="Email"
                    value={data.email}
                    onChange={(e) => setData("email", e.target.value)}
                />
                {errors.email && <p className="text-red-500">{errors.email}</p>}

                <input
                    className="border rounded px-3 py-2 w-full"
                    placeholder="Phone"
                    value={data.phone}
                    onChange={(e) => setData("phone", e.target.value)}
                />

                <button
                    type="submit"
                    className="bg-blue-600 text-white px-4 py-2 rounded"
                >
                    Continue
                </button>
            </form>
        </div>
    );
}
