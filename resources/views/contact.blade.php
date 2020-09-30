<body class = "flex item-center justify-center h-full" style="background-color: gray">
    <form
        method="post"
        action="/contact"
        class="bg-white p-6 rounded shadow-md"
        style="width:300px"
    >
        @csrf

        <div class="mb-5">
            <label
                for="email"
                class="block text-xs uppercase font-semibold mb-1"
            >
                Email Address
            </label>
            
            <input 
                type="text"
                id="email"
                name="email"
                class="border px-2 py-1 text-sm w-full"
            >

            @error('email')
                <div class="text-red-500 text-xs">{{$message}}</div>
            @enderror

            @session('message')
                <p>{{session('message')}}</p>
            @endsession
        </div>
        <button
            type="submit"
            class = "bg-blue-500 py-2 text-white rounded-full text-sm m-full"
        >
            Email Me
        </button>
    </form>
</body>
</html>    