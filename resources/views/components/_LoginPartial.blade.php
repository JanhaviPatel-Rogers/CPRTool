
        <ul class="navbar-nav">
{{--            @if (SignInManager.IsSignedIn(User))--}}

{{--                {--}}

                <li class="nav-item">
                    <a  class="nav-link" asp-area="Identity" asp-page="/Account/Manage/Index" title="Manage">Hello @User.Identity.Name!</a>
                </li>
                <li class="nav-item">
                    <form  class="form-inline" asp-area="Identity" asp-page="/Account/Logout" asp-route-returnUrl="@Url.Action("Index", "Home", new { area = "" })">
                    <button  type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                </li>
{{--                }--}}
{{--                else--}}
{{--                {--}}
                <li class="nav-item">
                    <a class="nav-link" asp-area="Identity" asp-page="/Identity/Account/Register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" asp-area="Identity" asp-page="/Identity/Account/Login">Login</a>
                </li>
{{--                }--}}
        </ul>
