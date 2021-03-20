<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>


            </div>
        </div>
    </div>

    <div class="row justify-center text-center">

        <button class="btn btn-success" onclick="goSwoole()">Connect</button>

    </div>
    <div class="row justify-center text-center">

        <span id="user_span">Username :  </span>
    </div>
    <script>

        function goSwoole() {
            socket = io('127.0.0.1:1215', {transports: ['websocket']});
            socket.on("userInfo", (data) => {
                document.getElementById('user_span').innerText=`
                ID : ${data.id}
                Name : ${data.name}
                Email : ${data.email}
 `;
            });

        }

    </script>
</x-app-layout>
