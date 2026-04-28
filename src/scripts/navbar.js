import React, { useEffect, useState, useRef } from "react"

const navLinks = [
  { label: "Menu", href: "#from-our-cases" },
  { label: "The Sacripantina", href: "#the-sacripantina" },
  { label: "Catering", href: "#catering" },
  { label: "Our Story", href: "#brand-quote" },
]

const logoUrl =
  "http://stella-pastry-cafe.local/wp-content/uploads/2026/04/Stella_Principal_tagline-scaled.png"

export default function Navbar() {
  const [menuOpen, setMenuOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  // Use a ref for the scroll progress (0–1) to drive smooth interpolation
  const scrollProgressRef = useRef(0)
  const rafRef = useRef(null)

  // Smoother scroll detection — uses rAF to interpolate the "scrolled" state
  // so the CSS transition has a head-start before the class flips
  useEffect(() => {
    const THRESHOLD = 40        // px before "scrolled" kicks in
    const FADE_RANGE = 60       // px over which we consider the header "mid-scroll"

    const handleScroll = () => {
      const y = window.scrollY
      scrollProgressRef.current = Math.min(1, Math.max(0, (y - THRESHOLD) / FADE_RANGE))
      setScrolled(y > THRESHOLD)
    }

    handleScroll()
    window.addEventListener("scroll", handleScroll, { passive: true })
    return () => window.removeEventListener("scroll", handleScroll)
  }, [])

  useEffect(() => {
    const handleResize = () => {
      if (window.innerWidth >= 1024) setMenuOpen(false)
    }
    window.addEventListener("resize", handleResize)
    return () => window.removeEventListener("resize", handleResize)
  }, [])

  useEffect(() => {
    const handleAnchorClick = (e) => {
      const trigger = e.target.closest('a[href^="#"]')
      if (!trigger) return

      const targetId = trigger.getAttribute("href")
      if (!targetId || targetId === "#") return

      const targetEl = document.querySelector(targetId)
      if (!targetEl) return

      e.preventDefault()

      const wpAdminBar = document.getElementById("wpadminbar")
      const adminBarHeight = wpAdminBar ? wpAdminBar.offsetHeight : 0
      const navOffset = window.innerWidth >= 1024 ? 104 : 86
      const extraGap = 10

      const top =
        targetEl.getBoundingClientRect().top +
        window.pageYOffset -
        adminBarHeight -
        navOffset -
        extraGap

      window.scrollTo({ top, behavior: "smooth" })
      setMenuOpen(false)
    }

    document.addEventListener("click", handleAnchorClick)
    return () => document.removeEventListener("click", handleAnchorClick)
  }, [])

  // Close mobile menu on ESC
  useEffect(() => {
    const handleKey = (e) => {
      if (e.key === "Escape" && menuOpen) setMenuOpen(false)
    }
    document.addEventListener("keydown", handleKey)
    return () => document.removeEventListener("keydown", handleKey)
  }, [menuOpen])

  return (
    <>
      <header
        className={`st-site-header fixed left-0 right-0 z-[999] transition-all duration-500 ${
          scrolled ? "is-scrolled" : "is-top"
        }`}
        style={{ top: "var(--wp-admin--admin-bar--height, 0px)" }}
      >
        <div className="st-site-header__inner mx-auto flex max-w-[1440px] items-center justify-between gap-5 px-4 py-3 sm:px-6 lg:px-8">

          {/* Logo — larger, smooth transition */}
          <a href="#top" className="st-brand" aria-label="Stella Pastry & Cafe Home">
            <img
              src={logoUrl}
              alt="Stella Pastry & Cafe — The House of Sacripantina"
            />
          </a>

          {/* Desktop nav */}
          <div className="hidden items-center gap-5 lg:flex">
            <nav className="st-nav" aria-label="Main navigation">
              <div className="container">
                {navLinks.map((item) => (
                  <a key={item.label} href={item.href} className="btn">
                    {item.label}
                  </a>
                ))}

                <svg
                  className="outline"
                  overflow="visible"
                  width="100%"
                  height="100%"
                  viewBox="0 0 400 60"
                  preserveAspectRatio="none"
                  aria-hidden="true"
                >
                  <rect
                    className="rect"
                    pathLength="100"
                    x="0"
                    y="0"
                    width="400"
                    height="60"
                    rx="2"
                    ry="2"
                  />
                </svg>
              </div>
            </nav>

            <a href="#order-delivery" className="st-nav-order">
              Order Now
            </a>
          </div>

          {/* Mobile hamburger */}
          <button
            type="button"
            aria-label={menuOpen ? "Close menu" : "Open menu"}
            aria-expanded={menuOpen}
            onClick={() => setMenuOpen((prev) => !prev)}
            className="st-menu-toggle lg:hidden"
          >
            <span className="relative block h-4 w-5">
              <span
                className={`absolute left-0 top-0 h-px w-5 bg-current transition-transform duration-300 ease-in-out ${
                  menuOpen ? "translate-y-[7px] rotate-45" : ""
                }`}
              />
              <span
                className={`absolute left-0 top-[7px] h-px w-5 bg-current transition-opacity duration-300 ease-in-out ${
                  menuOpen ? "opacity-0" : "opacity-100"
                }`}
              />
              <span
                className={`absolute left-0 top-[14px] h-px w-5 bg-current transition-transform duration-300 ease-in-out ${
                  menuOpen ? "-translate-y-[7px] -rotate-45" : ""
                }`}
              />
            </span>
          </button>
        </div>

        {/* Mobile panel */}
        <div
          className={`st-mobile-panel lg:hidden ${menuOpen ? "is-open" : ""}`}
          aria-hidden={!menuOpen}
        >
          <nav className="mx-auto max-w-[1440px] px-4 py-4 sm:px-6">
            <div className="grid gap-2">
              {navLinks.map((item) => (
                <a key={item.label} href={item.href} className="st-mobile-link">
                  {item.label}
                </a>
              ))}
              <a href="#order-delivery" className="st-mobile-order">
                Order Now
              </a>
            </div>
          </nav>
        </div>

        <div className="navbar-wave" aria-hidden="true" />
      </header>

      {/* Spacer so content doesn't hide under the fixed navbar */}
      <div className="h-[80px] lg:h-[100px]" aria-hidden="true" />
    </>
  )
}