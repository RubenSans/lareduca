<div :class="{'sm:left-0': ! close, 'sm:left-[-280px]': close}"
    class="py-3 px-5 h-full w-[280px] fixed top-0 left-[-280px] sm:left-0 transition-all duration-300 shadow-lg">
    <div class="flex items-center justify-around gap-14 mb-5">
        <a href="{{ route('dashboard') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a>
        <button @click="close = ! close" type="button"><img class="mt-1 cursor-pointer" src="{{asset('assets/img/IconSidebar.svg')}}" alt="icon sidebar"></button>
    </div>
    <div class="flex flex-col divide-y-[2px] divide-slate-400 gap-5">
        <ul>
            <a href="{{ route('courses') }}" class="leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ Str::startsWith(request()->url(), route('courses')) ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 18.9C9.75002 18.9 9.50002 18.8417 9.29169 18.725C7.73335 17.875 4.99169 16.975 3.27502 16.75L3.03335 16.7167C1.94169 16.5833 1.04169 15.5583 1.04169 14.45V4.38332C1.04169 3.72499 1.30002 3.12499 1.77502 2.69165C2.25002 2.25832 2.86669 2.04999 3.51669 2.10832C5.35002 2.24999 8.11669 3.16665 9.68335 4.14999L9.88335 4.26665C9.94169 4.29999 10.0667 4.29999 10.1167 4.27499L10.25 4.19165C11.8167 3.20832 14.5834 2.27499 16.425 2.11665C16.4417 2.11665 16.5084 2.11665 16.525 2.11665C17.1334 2.05832 17.7584 2.27499 18.225 2.70832C18.7 3.14165 18.9584 3.74165 18.9584 4.39999V14.4583C18.9584 15.575 18.0584 16.5917 16.9584 16.725L16.6834 16.7583C14.9667 16.9833 12.2167 17.8917 10.6917 18.7333C10.4917 18.85 10.25 18.9 10 18.9ZM3.31669 3.34999C3.05002 3.34999 2.80835 3.44165 2.61669 3.61665C2.40835 3.80832 2.29169 4.08332 2.29169 4.38332V14.45C2.29169 14.9417 2.71669 15.4167 3.19169 15.4833L3.44169 15.5167C5.31669 15.7667 8.19169 16.7083 9.85835 17.6167C9.93335 17.65 10.0417 17.6583 10.0834 17.6417C11.75 16.7167 14.6417 15.7667 16.525 15.5167L16.8084 15.4833C17.2834 15.425 17.7084 14.9417 17.7084 14.45V4.39165C17.7084 4.08332 17.5917 3.81665 17.3834 3.61665C17.1667 3.42499 16.8917 3.33332 16.5834 3.34999C16.5667 3.34999 16.5 3.34999 16.4834 3.34999C14.8917 3.49165 12.325 4.34999 10.925 5.22499L10.7917 5.31665C10.3334 5.59999 9.68335 5.59999 9.24169 5.32499L9.04169 5.20832C7.61669 4.33332 5.05002 3.48332 3.41669 3.34999C3.38335 3.34999 3.35002 3.34999 3.31669 3.34999Z" />
                        <path
                            d="M10 18.2C9.65833 18.2 9.375 17.9167 9.375 17.575V5.07501C9.375 4.73335 9.65833 4.45001 10 4.45001C10.3417 4.45001 10.625 4.73335 10.625 5.07501V17.575C10.625 17.925 10.3417 18.2 10 18.2Z" />
                        <path
                            d="M6.45831 8.20001H4.58331C4.24165 8.20001 3.95831 7.91668 3.95831 7.57501C3.95831 7.23335 4.24165 6.95001 4.58331 6.95001H6.45831C6.79998 6.95001 7.08331 7.23335 7.08331 7.57501C7.08331 7.91668 6.79998 8.20001 6.45831 8.20001Z" />
                        <path
                            d="M7.08331 10.7H4.58331C4.24165 10.7 3.95831 10.4167 3.95831 10.075C3.95831 9.73335 4.24165 9.45001 4.58331 9.45001H7.08331C7.42498 9.45001 7.70831 9.73335 7.70831 10.075C7.70831 10.4167 7.42498 10.7 7.08331 10.7Z" />
                    </svg>
                    Courses
                </li>
            </a>
            <a href="{{ route('educational-games') }}" class="hover:text-blue-600 hover:fill-blue-600 leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ Str::startsWith(request()->url(), route('educational-games')) ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2 hover:fill-blue-600" width="20" height="20" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99999 19.4583C9.49999 19.4583 9.00832 19.3417 8.60832 19.1167L4.66665 16.8417C3.03332 15.7417 2.92499 15.5417 2.92499 13.8167V9.68333C2.92499 7.95833 3.03332 7.75833 4.63332 6.68333L8.61665 4.38333C9.40832 3.925 10.6 3.925 11.3917 4.38333L15.3333 6.65833C16.9667 7.75833 17.075 7.95833 17.075 9.68333V13.8167C17.075 15.5417 16.9667 15.7417 15.3667 16.8167L11.3833 19.1167C10.9917 19.35 10.4917 19.4583 9.99999 19.4583ZM9.99999 5.29166C9.71665 5.29166 9.43332 5.35 9.23332 5.46666L5.29165 7.74166C4.17499 8.5 4.17499 8.5 4.17499 9.68333V13.8167C4.17499 15 4.17499 15 5.33332 15.7833L9.24165 18.0333C9.64165 18.2667 10.3667 18.2667 10.7667 18.0333L14.7083 15.7583C15.825 15 15.825 15 15.825 13.8167V9.68333C15.825 8.5 15.825 8.5 14.6667 7.71666L10.7583 5.46666C10.5667 5.35 10.2833 5.29166 9.99999 5.29166Z" />
                        <path
                            d="M14.5834 7.48332C14.2417 7.48332 13.9584 7.19999 13.9584 6.85832V4.66666C13.9584 3.34999 13.4 2.79166 12.0834 2.79166H7.91669C6.60002 2.79166 6.04169 3.34999 6.04169 4.66666V6.79999C6.04169 7.14166 5.75835 7.42499 5.41669 7.42499C5.07502 7.42499 4.79169 7.14999 4.79169 6.79999V4.66666C4.79169 2.64999 5.90002 1.54166 7.91669 1.54166H12.0834C14.1 1.54166 15.2084 2.64999 15.2084 4.66666V6.85832C15.2084 7.19999 14.925 7.48332 14.5834 7.48332Z" />
                        <path
                            d="M11.3583 15.1917C11.1833 15.1917 11 15.1583 10.8166 15.0833L9.99997 14.7667L9.18331 15.0917C8.74164 15.2667 8.29164 15.225 7.95831 14.9833C7.62497 14.7417 7.44997 14.325 7.47497 13.85L7.52497 12.975L6.96664 12.3C6.66664 11.925 6.56664 11.4917 6.69997 11.0917C6.82497 10.7 7.16664 10.4 7.62497 10.2833L8.47497 10.0667L8.94997 9.32501C9.45831 8.52501 10.55 8.52501 11.0583 9.32501L11.5333 10.0667L12.3833 10.2833C12.8416 10.4 13.1833 10.7 13.3083 11.0917C13.4333 11.4833 13.3333 11.925 13.0333 12.2917L12.475 12.9667L12.525 13.8417C12.55 14.3167 12.375 14.725 12.0416 14.975C11.8416 15.1167 11.6083 15.1917 11.3583 15.1917ZM7.93331 11.5L8.49164 12.175C8.68331 12.4 8.79164 12.7583 8.77497 13.05L8.72497 13.925L9.54164 13.6C9.81664 13.4917 10.1833 13.4917 10.4583 13.6L11.275 13.925L11.225 13.05C11.2083 12.7583 11.3166 12.4083 11.5083 12.175L12.0666 11.5L11.2166 11.2833C10.9333 11.2083 10.6333 10.9917 10.475 10.75L10.0083 10.0167L9.53331 10.75C9.37497 11 9.07497 11.2167 8.79164 11.2917L7.93331 11.5Z" />
                    </svg>
                    Lareduca
                    Games
                </li>
            </a>
            <a href="{{ route('calendar') }}" class="hover:text-blue-600 hover:fill-blue-600 leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ Str::startsWith(request()->url(), route('calendar')) ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66669 5.29166C6.32502 5.29166 6.04169 5.00832 6.04169 4.66666V2.16666C6.04169 1.82499 6.32502 1.54166 6.66669 1.54166C7.00835 1.54166 7.29169 1.82499 7.29169 2.16666V4.66666C7.29169 5.00832 7.00835 5.29166 6.66669 5.29166Z" />
                        <path
                            d="M13.3333 5.29166C12.9916 5.29166 12.7083 5.00832 12.7083 4.66666V2.16666C12.7083 1.82499 12.9916 1.54166 13.3333 1.54166C13.675 1.54166 13.9583 1.82499 13.9583 2.16666V4.66666C13.9583 5.00832 13.675 5.29166 13.3333 5.29166Z" />
                        <path
                            d="M17.0834 8.69998H2.91669C2.57502 8.69998 2.29169 8.41665 2.29169 8.07498C2.29169 7.73331 2.57502 7.44998 2.91669 7.44998H17.0834C17.425 7.44998 17.7084 7.73331 17.7084 8.07498C17.7084 8.41665 17.425 8.69998 17.0834 8.69998Z" />
                        <path
                            d="M13.3333 19.4583H6.66667C3.625 19.4583 1.875 17.7083 1.875 14.6667V7.58332C1.875 4.54166 3.625 2.79166 6.66667 2.79166H13.3333C16.375 2.79166 18.125 4.54166 18.125 7.58332V14.6667C18.125 17.7083 16.375 19.4583 13.3333 19.4583ZM6.66667 4.04166C4.28333 4.04166 3.125 5.19999 3.125 7.58332V14.6667C3.125 17.05 4.28333 18.2083 6.66667 18.2083H13.3333C15.7167 18.2083 16.875 17.05 16.875 14.6667V7.58332C16.875 5.19999 15.7167 4.04166 13.3333 4.04166H6.66667Z" />
                        <path
                            d="M7.08333 12.5833C6.975 12.5833 6.86666 12.5583 6.76666 12.5167C6.66666 12.475 6.57501 12.4167 6.49167 12.3417C6.41667 12.2583 6.35832 12.1667 6.31666 12.0667C6.27499 11.9667 6.25 11.8583 6.25 11.75C6.25 11.5333 6.34167 11.3167 6.49167 11.1583C6.57501 11.0833 6.66666 11.025 6.76666 10.9833C6.91666 10.9167 7.08334 10.9 7.25001 10.9333C7.30001 10.9417 7.35 10.9583 7.4 10.9833C7.45 11 7.5 11.025 7.55 11.0583C7.59166 11.0917 7.63333 11.125 7.67499 11.1583C7.70833 11.2 7.74999 11.2417 7.77499 11.2833C7.80832 11.3333 7.83334 11.3833 7.85001 11.4333C7.87501 11.4833 7.89168 11.5333 7.90001 11.5833C7.90834 11.6417 7.91667 11.6917 7.91667 11.75C7.91667 11.9667 7.82499 12.1833 7.67499 12.3417C7.51666 12.4917 7.3 12.5833 7.08333 12.5833Z" />
                        <path
                            d="M10 12.5833C9.78335 12.5833 9.56669 12.4916 9.40836 12.3416C9.37503 12.3 9.3417 12.2583 9.30836 12.2167C9.27503 12.1667 9.25001 12.1167 9.23334 12.0667C9.20834 12.0167 9.19168 11.9667 9.18334 11.9167C9.17501 11.8583 9.16669 11.8083 9.16669 11.75C9.16669 11.6417 9.19168 11.5333 9.23334 11.4333C9.27501 11.3333 9.33336 11.2417 9.40836 11.1583C9.64169 10.925 10.0167 10.85 10.3167 10.9833C10.425 11.025 10.5083 11.0833 10.5917 11.1583C10.7417 11.3167 10.8334 11.5333 10.8334 11.75C10.8334 11.8083 10.825 11.8583 10.8167 11.9167C10.8084 11.9667 10.7917 12.0167 10.7667 12.0667C10.75 12.1167 10.725 12.1667 10.6917 12.2167C10.6583 12.2583 10.625 12.3 10.5917 12.3416C10.5083 12.4166 10.425 12.475 10.3167 12.5167C10.2167 12.5583 10.1084 12.5833 10 12.5833Z" />
                        <path
                            d="M7.08333 15.5C6.975 15.5 6.86666 15.475 6.76666 15.4334C6.66666 15.3917 6.57501 15.3333 6.49167 15.2583C6.41667 15.175 6.35832 15.0917 6.31666 14.9833C6.27499 14.8833 6.25 14.775 6.25 14.6667C6.25 14.45 6.34167 14.2333 6.49167 14.075C6.57501 14 6.66666 13.9417 6.76666 13.9C7.075 13.7667 7.44166 13.8417 7.67499 14.075C7.70833 14.1167 7.74999 14.1583 7.77499 14.2C7.80832 14.25 7.83334 14.3 7.85001 14.35C7.87501 14.4 7.89168 14.45 7.90001 14.5083C7.90834 14.5583 7.91667 14.6167 7.91667 14.6667C7.91667 14.8833 7.82499 15.1 7.67499 15.2583C7.51666 15.4083 7.3 15.5 7.08333 15.5Z" />
                    </svg>
                    Calendar
                </li>
            </a>
            <a href="{{ route('grades') }}" class="hover:text-blue-600 hover:fill-blue-600 leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ Str::startsWith(request()->url(), route('grades')) ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.175 17.3167C12.9583 17.3167 12.7333 17.3083 12.4917 17.2833C12.0583 17.25 11.5667 17.1667 11.0583 17.0417L9.65833 16.7083C5.81667 15.8 4.55833 13.7667 5.45833 9.93334L6.275 6.44167C6.45833 5.65001 6.675 5.00834 6.94167 4.47501C8.375 1.51667 11.1167 1.78334 13.0667 2.24167L14.4583 2.56667C16.4083 3.02501 17.6417 3.75001 18.3333 4.85834C19.0167 5.96667 19.125 7.39167 18.6667 9.34167L17.85 12.825C17.1333 15.875 15.6417 17.3167 13.175 17.3167ZM10.9333 3.20834C9.54167 3.20834 8.65833 3.78334 8.06667 5.01667C7.85 5.46667 7.65833 6.02501 7.49167 6.72501L6.675 10.2167C5.93333 13.3667 6.79167 14.7417 9.94167 15.4917L11.3417 15.825C11.7917 15.9333 12.2167 16 12.6 16.0333C14.8667 16.2583 15.9917 15.2667 16.625 12.5417L17.4417 9.05834C17.8167 7.45001 17.7667 6.32501 17.2667 5.51667C16.7667 4.70834 15.7833 4.15834 14.1667 3.78334L12.775 3.45834C12.0833 3.29167 11.4667 3.20834 10.9333 3.20834Z" />
                        <path
                            d="M6.94167 19.0417C4.8 19.0417 3.43334 17.7583 2.55834 15.05L1.49167 11.7583C0.308336 8.09166 1.36667 6.025 5.01667 4.84166L6.33334 4.41666C6.76667 4.28333 7.09167 4.19166 7.38334 4.14166C7.625 4.09166 7.85834 4.18333 8 4.375C8.14167 4.56666 8.16667 4.81666 8.06667 5.03333C7.85 5.475 7.65834 6.03333 7.5 6.73333L6.68334 10.225C5.94167 13.375 6.8 14.75 9.95 15.5L11.35 15.8333C11.8 15.9417 12.225 16.0083 12.6083 16.0417C12.875 16.0667 13.0917 16.25 13.1667 16.5083C13.2333 16.7667 13.1333 17.0333 12.9167 17.1833C12.3667 17.5583 11.675 17.875 10.8 18.1583L9.48334 18.5917C8.525 18.8917 7.69167 19.0417 6.94167 19.0417ZM6.48334 5.68333L5.40834 6.03333C2.43334 6.99166 1.725 8.39166 2.68334 11.375L3.75 14.6667C4.71667 17.6417 6.11667 18.3583 9.09167 17.4L10.4083 16.9667C10.4583 16.95 10.5 16.9333 10.55 16.9167L9.66667 16.7083C5.825 15.8 4.56667 13.7667 5.46667 9.93333L6.28334 6.44166C6.34167 6.175 6.40834 5.91666 6.48334 5.68333Z" />
                        <path
                            d="M14.575 9.25833C14.525 9.25833 14.475 9.25 14.4167 9.24166L10.375 8.21666C10.0417 8.13333 9.84168 7.79166 9.92502 7.45833C10.0084 7.125 10.35 6.925 10.6834 7.00833L14.725 8.03333C15.0584 8.11666 15.2584 8.45833 15.175 8.79166C15.1084 9.06666 14.85 9.25833 14.575 9.25833Z" />
                        <path
                            d="M12.1333 12.075C12.0833 12.075 12.0333 12.0667 11.975 12.0583L9.55001 11.4417C9.21667 11.3583 9.01667 11.0167 9.10001 10.6833C9.18334 10.35 9.52501 10.15 9.85834 10.2333L12.2833 10.85C12.6167 10.9333 12.8167 11.275 12.7333 11.6083C12.6667 11.8917 12.4167 12.075 12.1333 12.075Z" />
                    </svg>
                    Grades
                </li>
            </a>
            @if(auth()->user()->isAdmin())
            <a href="{{ route('user-management') }}"
                class="hover:text-blue-600 hover:fill-blue-600 leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ Str::startsWith(request()->url(), route('user-management')) ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.63301 10.1833C7.60801 10.1833 7.59134 10.1833 7.56634 10.1833C7.52468 10.175 7.46634 10.175 7.41634 10.1833C4.99967 10.1083 3.17467 8.20834 3.17467 5.86667C3.17467 3.48334 5.11634 1.54167 7.49968 1.54167C9.88301 1.54167 11.8247 3.48334 11.8247 5.86667C11.8163 8.20834 9.98301 10.1083 7.65801 10.1833C7.64967 10.1833 7.64134 10.1833 7.63301 10.1833ZM7.49968 2.79167C5.80801 2.79167 4.42467 4.17501 4.42467 5.86667C4.42467 7.53334 5.72467 8.87501 7.38301 8.93334C7.43301 8.92501 7.54134 8.92501 7.64968 8.93334C9.28301 8.85834 10.5663 7.51667 10.5747 5.86667C10.5747 4.17501 9.19134 2.79167 7.49968 2.79167Z" />
                        <path
                            d="M13.783 10.2917C13.758 10.2917 13.733 10.2917 13.708 10.2833C13.3663 10.3167 13.0163 10.075 12.983 9.73334C12.9497 9.39167 13.158 9.08334 13.4997 9.04167C13.5997 9.03334 13.708 9.03334 13.7997 9.03334C15.0163 8.96667 15.9663 7.96667 15.9663 6.74167C15.9663 5.47501 14.9413 4.45001 13.6747 4.45001C13.333 4.45834 13.0497 4.17501 13.0497 3.83334C13.0497 3.49167 13.333 3.20834 13.6747 3.20834C15.6247 3.20834 17.2163 4.80001 17.2163 6.75001C17.2163 8.66667 15.7163 10.2167 13.808 10.2917C13.7997 10.2917 13.7913 10.2917 13.783 10.2917Z" />
                        <path
                            d="M7.64134 19.2917C6.00801 19.2917 4.36634 18.875 3.12467 18.0417C1.96634 17.275 1.33301 16.225 1.33301 15.0833C1.33301 13.9417 1.96634 12.8833 3.12467 12.1083C5.62468 10.45 9.67468 10.45 12.158 12.1083C13.308 12.875 13.9497 13.925 13.9497 15.0667C13.9497 16.2083 13.3163 17.2667 12.158 18.0417C10.908 18.875 9.27468 19.2917 7.64134 19.2917ZM3.81634 13.1583C3.01634 13.6917 2.58301 14.375 2.58301 15.0917C2.58301 15.8 3.02467 16.4833 3.81634 17.0083C5.89134 18.4 9.39134 18.4 11.4663 17.0083C12.2663 16.475 12.6997 15.7917 12.6997 15.075C12.6997 14.3667 12.258 13.6833 11.4663 13.1583C9.39134 11.775 5.89134 11.775 3.81634 13.1583Z" />
                        <path
                            d="M15.283 17.7917C14.9913 17.7917 14.733 17.5917 14.6747 17.2917C14.608 16.95 14.8247 16.625 15.158 16.55C15.683 16.4417 16.1663 16.2333 16.5413 15.9417C17.0163 15.5833 17.2747 15.1333 17.2747 14.6583C17.2747 14.1833 17.0163 13.7333 16.5497 13.3833C16.183 13.1 15.7247 12.9 15.183 12.775C14.8497 12.7 14.633 12.3667 14.708 12.025C14.783 11.6917 15.1163 11.475 15.458 11.55C16.1747 11.7083 16.7997 11.9917 17.308 12.3833C18.083 12.9667 18.5247 13.7917 18.5247 14.6583C18.5247 15.525 18.0747 16.35 17.2997 16.9417C16.783 17.3417 16.133 17.6333 15.4163 17.775C15.3663 17.7917 15.3247 17.7917 15.283 17.7917Z" />
                    </svg>
                    User Management
                </li>
            </a>
            @endif
        </ul>
        <ul class="pt-5">
            <a href="{{ route('profile.show') }}" class="hover:text-blue-600 hover:fill-blue-600 leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ request()->routeIs('profile.show') ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 13.625C8.27502 13.625 6.87502 12.225 6.87502 10.5C6.87502 8.77502 8.27502 7.37501 10 7.37501C11.725 7.37501 13.125 8.77502 13.125 10.5C13.125 12.225 11.725 13.625 10 13.625ZM10 8.62501C8.96669 8.62501 8.12502 9.46668 8.12502 10.5C8.12502 11.5333 8.96669 12.375 10 12.375C11.0334 12.375 11.875 11.5333 11.875 10.5C11.875 9.46668 11.0334 8.62501 10 8.62501Z" />
                        <path
                            d="M12.675 18.9917C12.5 18.9917 12.325 18.9667 12.15 18.925C11.6334 18.7833 11.2 18.4583 10.925 18L10.825 17.8333C10.3334 16.9833 9.65835 16.9833 9.16669 17.8333L9.07502 17.9917C8.80002 18.4583 8.36669 18.7917 7.85002 18.925C7.32502 19.0667 6.78335 18.9917 6.32502 18.7167L4.89169 17.8917C4.38335 17.6 4.01669 17.125 3.85835 16.55C3.70835 15.975 3.78335 15.3833 4.07502 14.875C4.31669 14.45 4.38335 14.0667 4.24169 13.825C4.10002 13.5833 3.74169 13.4417 3.25002 13.4417C2.03335 13.4417 1.04169 12.45 1.04169 11.2333V9.76668C1.04169 8.55001 2.03335 7.55835 3.25002 7.55835C3.74169 7.55835 4.10002 7.41668 4.24169 7.17502C4.38335 6.93335 4.32502 6.55002 4.07502 6.12502C3.78335 5.61668 3.70835 5.01668 3.85835 4.45001C4.00835 3.87501 4.37502 3.40002 4.89169 3.10835L6.33335 2.28335C7.27502 1.72501 8.51669 2.05001 9.08335 3.00835L9.18335 3.17501C9.67502 4.02501 10.35 4.02501 10.8417 3.17501L10.9334 3.01668C11.5 2.05001 12.7417 1.72501 13.6917 2.29168L15.125 3.11668C15.6334 3.40835 16 3.88335 16.1584 4.45835C16.3084 5.03335 16.2334 5.62502 15.9417 6.13335C15.7 6.55835 15.6334 6.94168 15.775 7.18335C15.9167 7.42502 16.275 7.56668 16.7667 7.56668C17.9834 7.56668 18.975 8.55835 18.975 9.77502V11.2417C18.975 12.4583 17.9834 13.45 16.7667 13.45C16.275 13.45 15.9167 13.5917 15.775 13.8333C15.6334 14.075 15.6917 14.4583 15.9417 14.8833C16.2334 15.3917 16.3167 15.9917 16.1584 16.5583C16.0084 17.1333 15.6417 17.6083 15.125 17.9L13.6834 18.725C13.3667 18.9 13.025 18.9917 12.675 18.9917ZM10 15.9083C10.7417 15.9083 11.4334 16.375 11.9084 17.2L12 17.3583C12.1 17.5333 12.2667 17.6583 12.4667 17.7083C12.6667 17.7583 12.8667 17.7333 13.0334 17.6333L14.475 16.8C14.6917 16.675 14.8584 16.4667 14.925 16.2167C14.9917 15.9667 14.9584 15.7083 14.8334 15.4917C14.3584 14.675 14.3 13.8333 14.6667 13.1917C15.0334 12.55 15.7917 12.1833 16.7417 12.1833C17.275 12.1833 17.7 11.7583 17.7 11.225V9.75835C17.7 9.23335 17.275 8.80001 16.7417 8.80001C15.7917 8.80001 15.0334 8.43335 14.6667 7.79168C14.3 7.15002 14.3584 6.30835 14.8334 5.49168C14.9584 5.27501 14.9917 5.01668 14.925 4.76668C14.8584 4.51668 14.7 4.31668 14.4834 4.18335L13.0417 3.35835C12.6834 3.14168 12.2084 3.26668 11.9917 3.63335L11.9 3.79168C11.425 4.61668 10.7334 5.08335 9.99169 5.08335C9.25002 5.08335 8.55835 4.61668 8.08335 3.79168L7.99169 3.62501C7.78335 3.27501 7.31669 3.15001 6.95835 3.35835L5.51669 4.19168C5.30002 4.31668 5.13335 4.52502 5.06669 4.77502C5.00002 5.02502 5.03335 5.28335 5.15835 5.50002C5.63335 6.31668 5.69169 7.15835 5.32502 7.80002C4.95835 8.44168 4.20002 8.80835 3.25002 8.80835C2.71669 8.80835 2.29169 9.23335 2.29169 9.76668V11.2333C2.29169 11.7583 2.71669 12.1917 3.25002 12.1917C4.20002 12.1917 4.95835 12.5583 5.32502 13.2C5.69169 13.8417 5.63335 14.6833 5.15835 15.5C5.03335 15.7167 5.00002 15.975 5.06669 16.225C5.13335 16.475 5.29169 16.675 5.50835 16.8083L6.95002 17.6333C7.12502 17.7417 7.33335 17.7667 7.52502 17.7167C7.72502 17.6667 7.89169 17.5333 8.00002 17.3583L8.09169 17.2C8.56669 16.3833 9.25835 15.9083 10 15.9083Z" />
                    </svg>
                    Settings
                </li>
            </a>
            <a href="{{ route('support') }}" class="hover:text-blue-600 hover:fill-blue-600 leading-[30px] font-medium text-[16px]">
                <li
                    class="{{ Str::startsWith(request()->url(), route('support')) ? 'bg-blue85 text-white fill-white' : 'bg-blue15 text-black33 fill-black33 hover:text-blue-600 hover:fill-blue-600 '}} flex items-center gap-1 my-3 p-2 rounded-[8px]">
                    <svg class="mx-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.32501 18.9833C7.82501 18.9833 7.35001 18.7333 7.02501 18.2917L6.02503 16.9583C6.02503 16.9667 5.98336 16.9417 5.96669 16.9417H5.65836C2.80836 16.9417 1.04169 16.1667 1.04169 12.325V8.99167C1.04169 5.48334 3.18336 4.56667 4.98336 4.40834C5.18336 4.38334 5.41669 4.375 5.65836 4.375H10.9917C14.0084 4.375 15.6084 5.97501 15.6084 8.99167V12.325C15.6084 12.5667 15.6 12.8 15.5667 13.025C15.4167 14.8 14.5 16.9417 10.9917 16.9417H10.6584L9.62501 18.2917C9.30001 18.7333 8.82501 18.9833 8.32501 18.9833ZM5.65836 5.625C5.46669 5.625 5.28336 5.63333 5.10836 5.65C3.17502 5.81667 2.29169 6.87501 2.29169 8.99167V12.325C2.29169 15.1833 3.17503 15.6917 5.65836 15.6917H5.99169C6.36669 15.6917 6.79168 15.9 7.02501 16.2L8.02502 17.5417C8.20836 17.7917 8.44169 17.7917 8.62503 17.5417L9.62501 16.2083C9.86668 15.8833 10.25 15.6917 10.6584 15.6917H10.9917C13.1084 15.6917 14.1667 14.8 14.325 12.9C14.35 12.7 14.3584 12.5167 14.3584 12.325V8.99167C14.3584 6.66667 13.3167 5.625 10.9917 5.625H5.65836V5.625Z" />
                        <path
                            d="M8.32522 11.825C7.85855 11.825 7.49188 11.45 7.49188 10.9917C7.49188 10.5333 7.86688 10.1583 8.32522 10.1583C8.78355 10.1583 9.15855 10.5333 9.15855 10.9917C9.15855 11.45 8.79188 11.825 8.32522 11.825Z" />
                        <path
                            d="M10.9916 11.825C10.5249 11.825 10.1583 11.45 10.1583 10.9917C10.1583 10.5333 10.5333 10.1583 10.9916 10.1583C11.4499 10.1583 11.8249 10.5333 11.8249 10.9917C11.8249 11.45 11.4499 11.825 10.9916 11.825Z" />
                        <path
                            d="M5.66652 11.825C5.19986 11.825 4.83319 11.45 4.83319 10.9917C4.83319 10.5333 5.20819 10.1583 5.66652 10.1583C6.12486 10.1583 6.49986 10.5333 6.49986 10.9917C6.49986 11.45 6.12486 11.825 5.66652 11.825Z" />
                        <path
                            d="M14.9501 13.575C14.7835 13.575 14.6168 13.5083 14.5001 13.3833C14.3668 13.25 14.3085 13.0583 14.3335 12.875C14.3585 12.7 14.3668 12.5167 14.3668 12.325V8.99166C14.3668 6.66666 13.3251 5.62499 11.0001 5.62499H5.66679C5.47512 5.62499 5.29181 5.63332 5.11681 5.64999C4.93348 5.67499 4.7418 5.60831 4.60846 5.48331C4.47513 5.34998 4.40012 5.16667 4.41679 4.98333C4.56679 3.18333 5.49179 1.04166 9.00012 1.04166H14.3335C17.3501 1.04166 18.9501 2.64166 18.9501 5.65833V8.99166C18.9501 12.5 16.8085 13.4167 15.0085 13.575C14.9835 13.575 14.9668 13.575 14.9501 13.575ZM5.76681 4.37499H10.9918C14.0085 4.37499 15.6085 5.975 15.6085 8.99166V12.2167C17.0251 11.8667 17.6918 10.825 17.6918 8.99166V5.65833C17.6918 3.33333 16.6501 2.29166 14.3251 2.29166H8.99181C7.15847 2.29166 6.12514 2.95832 5.76681 4.37499Z" />
                    </svg>
                    Support
                </li>
            </a>
        </ul>
    </div>
</div>
